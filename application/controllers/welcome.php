<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('restaurant/restaurant_model');
		$this->load->library("../controllers/user/facebook_login");
	}
	public function index() {
		$this->session->set_userdata('uuid', uniqid());
		$facebookLoginURL = $this->facebook_login->get_facebook_login_url();
		
		$resArr= array();
		if( $this->session->userdata ( 'username' )) {
			$restaurantList = $this->restaurant_model->get_restaurant_by_user((int)$this->session->userdata ( 'id' ));
			// add items to session
			$res = array();
			foreach ($restaurantList as $restaurant) {
				array_push($res, array( $restaurant->id, $restaurant->name));
			}
			$this->session->set_userdata('user-restaurants', $res);
			
			//recommendation
// 			$recommended_restaurants = array(
// 					'recommended_restaurants' => $this->recommend->give_recommendation($this->session->userdata ( 'id' ))
// 			);	
			
// 			foreach($recommended_restaurants['recommended_restaurants']['productScores'] as $i) {
// 				$id = $i['product'];
// 				$res = $this->restaurant_model->get_restaurant_by_id($id);
// 				array_push($resArr, $res);
// 			}
		} else {
			$resArr = $this->restaurant_model->get_restaurant_list();
		}
		$data = array(
			'restaurants' => $resArr,
			'facebookLoginURL' => $facebookLoginURL,
		);
		$this->load->view('frontend/index', $data);
	}
}
