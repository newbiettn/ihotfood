<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller {
	// show restaurant details
	// http://ihotfood.com/index.php/restaurant/show_restaurant/restaurantID
	public function show_restaurant($id) {
		$this->load->model( 'restaurant/restaurant_model' );
		$this->load->model( 'restaurant/review_model' );
		$restaurant = $this->restaurant_model->get_restaurant_by_id($id);
		if(! $restaurant ) {
			$data = array (
				'heading' => "Error 404",
				'message' => "Restaurant does not exist"
			);
			$this->load->view('../errors/error_404', $data);
		}
		else {
			$review_list = $this->review_model->get_restaurant_reviews($id);
			$this->load->model("user/basic_user_model");
			$reviews = array();
			foreach ($review_list as $review) {
				$review->user_info = $this->basic_user_model->get_user_info_by_id($review->user_id);
				array_push($reviews, $review);
			}
			$data = array (
				'restaurant' => $restaurant,
				'reviews' => $reviews,
			);
			
			$this->load->view ( 'frontend/view_restaurant', $data );
		}
	}

	public function user_write_review($resId) {
		$this->load->model( 'restaurant/restaurant_model' );
		$this->load->model("user/basic_user_model");
		$this->load->model("notification/notification_model");

		$userid = $this->session->userdata('id');
		$socket_id =$this->input->post('socket_id');
		$restaurant = $this->restaurant_model->get_restaurant_by_id($resId);
		
		if(! $restaurant) {
			$data = array(
				"heading" => "Error 404",
				"message" => "Restaurant not found",
			);	
			$this->load->view("../errors/error_404", $data);
		}
		if( ! $this->session->userdata("username") ) {
			// raise 403
			$data = array(
				"heading" => "Permission denied",
				"message" => "You must login first to write review",
			);
			$this->load->view("../errors/error_403", $data);	
			return;
		}
		if($this->session->userdata('id') == $restaurant->owner_id) {
			// raise 403
			$data = array(
				"heading" => "Permission denied",
				"message" => "You cannot write review about your own restaurant",
			);	
			$this->load->view("../errors/error_403", $data);	
			return;
		}

		// set review form rules
	 	$this->form_validation->set_rules ( 'title', 'Review title', 'required|trim|max_length[100]|xss_clean' );
	 	$this->form_validation->set_rules ( 'content', 'Review content', 'required|trim|xss_clean' );
	 	$this->form_validation->set_rules ( 'score', 'Review score', 'required|trim|max_length[1]|is_natural|less_than[6]|greater_than[0]|xss_clean' );
		
	 	
	 	$jsonArr = array();
	 	$jsonArr['status'] = 'false';
		if ($this->form_validation->run () == TRUE) {
			$this->load->model("restaurant/review_model");
			$new_review_id = $this->review_model->create_review($resId);
			if(! $new_review_id ) {
				$data = array(
					"heading" => "Unexpected error",
					"message" => "Something went wrong, please try again later",
				);	
				$this->load->view("../errors/error_db", $data);
				return;
			}
			
			
			/****************** NOTIFICATION SHIT BEGINS ******************/
			//subscribe for notification
			if (!$this->notification_model->is_user_subscribed($userid, $resId)) {
				$this->notification_model->subsribe_channel($userid, $resId);
				//update channels in session
				$channelArr = $this->notification_model->get_channel_by_user_id($userid);
				$this->session->set_userdata('channels', $channelArr);
			}
			
			//notify
			$this->notification->notify_new_restaurant_review($resId, $userid, $new_review_id, $socket_id);
			/****************** NOTIFICATION SHIT ENDS ******************/
				
			$jsonArr['status'] = 'true';
	 	} else {
	 		$jsonArr['error'] = $this->form_validation->error_array();;
	 	}
	 	echo(json_encode($jsonArr));
 		//$this->show_restaurant($resId);
	}
}