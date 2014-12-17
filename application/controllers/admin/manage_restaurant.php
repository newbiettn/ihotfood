<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_Restaurant extends CI_Controller {

	//VIEWS: show index page
	public function index() {
		$this->load->view('admin/dashboard');
	}

	//VIEWS: show all restaurants
	public function get_all_restaurant(){
		$this->load->model('admin/manage_restaurant_model');
		$q = $this->manage_restaurant_model->get_all_restaurants();
		$data = array('all_res' => $q);
		$this->load->view('admin/manage_restaurant_view', $data);	
	}

	//MODELS: delete a restaurant 
	public function do_delete_restaurant($id){
		$this->load->model('admin/manage_restaurant_model');
		$q = $this->manage_restaurant_model->delete_restaurant($id); 
		$this->get_all_restaurant();
	}

	//VIEWS: show edit restaurant
	public function show_edit_restaurant($id){
		$this->load->model('admin/manage_restaurant_model'); 
		$q = $this->manage_restaurant_model->get_restaurant($id);
		$data = array('current_res' => $q);
		$this->load->view('admin/edit_restaurant_view', $data); 
	}

	//MODEL: edit restaurant
	// run validation rules 
	// update new information to database 
	public function do_edit_restaurant(){
		$id = $this->input->post('id');

		$this->validation_rules(); 

		if ($this->form_validation->run() == FALSE){
			$this->show_edit_restaurant($id); 
		} else {		
			$owner_id = $this->input->post('owner_id');
			$name = $this->input->post('name');
			$address_number = $this->input->post('address_number');
			$address_street = $this->input->post('address_street');
			$address_ward = $this->input->post('address_ward');
			$address_city = $this->input->post('address_city');
			$zipcode = $this->input->post('zipcode');
			$phone_number = $this->input->post('phone_number');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$capacity = $this->input->post('capacity');
			$opening_hour = $this->input->post('opening_hour');
			$closing_hour = $this->input->post('closing_hour');
			$lowest_price = $this->input->post('lowest_price');
			$highest_price = $this->input->post('highest_price');
			$description = $this->input->post('description');
			$album_id = $this->input->post('album_id');
			$restaurantscol = $this->input->post('restaurantscol');
			$address = $this->input->post('address');
			$rating = $this->input->post('rating');
			$latlong = $this->input->post('latlong');

			$data = array (
					'owner_id' => $owner_id,
					'name' => $name,
					'address_number' => $address_number, 
					'address_street' => $address_street, 
					'address_ward' => $address_ward,
					'address_city' => $address_city,
					'zipcode' => $zipcode,
					'phone_number' => $phone_number,
					'email' => $email,
					'website' => $website,
					'capacity' => $capacity,
					'opening_hour' => $opening_hour,
					'closing_hour' => $closing_hour,
					'lowest_price' => $lowest_price,
					'highest_price' => $highest_price,
					'description' => $description,
					'album_id' => $album_id,
					'restaurantscol' => $restaurantscol,
					'address' => $address,
					'rating' => $rating,
					'latlong' => $latlong
		);

		$this->load->model('admin/manage_restaurant_model'); 
		$q = $this->manage_restaurant_model->edit_restaurant($id, $data);
		$this->get_all_restaurant();

		}
	}

	//VIEWS: show create new restaurant 
	public function show_create_restaurant(){
		$this->load->view("admin/create_restaurant_view"); 
	}

	//MODELS: create restaurant
	// check validation rules 
	// insert new restaurant to database
	public function do_create_restaurant(){
		//validation 
		$this->validation_rules(); 
		$this->form_validation->set_rules ( 'email', 'Email', 'trim|max_length[200]|valid_email|xss_clean' );
		if ($this->form_validation->run() == FALSE){
			$this->show_create_restaurant(); 
		} else {
			$id = $this->input->post('id');
			$owner_id = $this->input->post('owner_id');
			$name = $this->input->post('name');
			$address_number = $this->input->post('address_number');
			$address_street = $this->input->post('address_street');
			$address_ward = $this->input->post('address_ward');
			$address_city = $this->input->post('address_city');
			$zipcode = $this->input->post('zipcode');
			$phone_number = $this->input->post('phone_number');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$capacity = $this->input->post('capacity');
			$opening_hour = $this->input->post('opening_hour');
			$closing_hour = $this->input->post('closing_hour');
			$lowest_price = $this->input->post('lowest_price');
			$highest_price = $this->input->post('highest_price');
			$description = $this->input->post('description');
			$album_id = $this->input->post('album_id');
			$restaurantscol = $this->input->post('restaurantscol');
			$address = $this->input->post('address');
			$rating = $this->input->post('rating');
			$latlong = $this->input->post('latlong');

			$data = array (
					'owner_id' => $owner_id,
					'name' => $name,
					'address_number' => $address_number, 
					'address_street' => $address_street, 
					'address_ward' => $address_ward,
					'address_city' => $address_city,
					'zipcode' => $zipcode,
					'phone_number' => $phone_number,
					'email' => $email,
					'website' => $website,
					'capacity' => $capacity,
					'opening_hour' => $opening_hour,
					'closing_hour' => $closing_hour,
					'lowest_price' => $lowest_price,
					'highest_price' => $highest_price,
					'description' => $description,
					'album_id' => $album_id,
					'restaurantscol' => $restaurantscol,
					'address' => $address,
					'rating' => $rating,
					'latlong' => $latlong
			);

			$this->load->model('admin/manage_restaurant_model'); 
			$q = $this->manage_restaurant_model->create_restaurant($data);
			$this->get_all_restaurant();
		}
		
	}
	//validation for fields of restaurant 
	function validation_rules(){
		$this->form_validation->set_rules ( 'name', 'Restaurant Name', 'required|trim|max_length[200]|xss_clean' );
		$this->form_validation->set_rules ( 'description', 'Restaurant Description', 'required|trim|xss_clean' );
		$this->form_validation->set_rules ( 'address_number', 'Address Number', 'required|trim|max_length[4]|numeric|xss_clean' );
		$this->form_validation->set_rules ( 'address_street', 'Address Street', 'required|trim|max_length[200]|xss_clean' );
		$this->form_validation->set_rules ( 'address_ward', 'Address Ward', 'required|trim|max_length[200]|xss_clean' );
		$this->form_validation->set_rules ( 'address_city', 'Address City', 'required|trim|max_length[200]|xss_clean' );
		$this->form_validation->set_rules ( 'zipcode', 'Zipcode', 'required|trim|max_length[10]|numeric|xss_clean' );
		$this->form_validation->set_rules ( 'latlong', 'Latitude-Longtitude', 'required|trim|max_length[255]|xss_clean|callback_validate_latlong' );
		$this->form_validation->set_rules ( 'phone_number', 'Phone Number', 'required|trim|max_length[200]|numeric|xss_clean' );
		$this->form_validation->set_rules ( 'website', 'Website', 'trim|max_length[200]|xss_clean' );
		
		// set rules for other information fields
		$this->form_validation->set_rules ( 'capacity', 'Capacity', 'trim|is_natural|xss_clean' );
		$this->form_validation->set_rules ( 'opening_hour', 'Opening Hour', 'required|trim|max_length[2]|is_natural|less_than[24]|xss_clean' );
		$this->form_validation->set_rules ( 'closing_hour', 'Closing Hour', 'required|trim|max_length[2]|is_natural|less_than[24]|xss_clean' );
		$this->form_validation->set_rules ( 'lowest_price', 'Lowest Price', 'trim|max_length[10]|xss_clean' );
		$this->form_validation->set_rules ( 'highest_price', 'Highest Price', 'trim|max_length[10]|xss_clean' );
	}

	//validate latitude and longtitude value: numeric numbers 
	public function validate_latlong($latlong) {
		$pieces = explode(',', $latlong);
		if(count($pieces) != 2) {
			$this->form_validation->set_message ( 'validate_latlong', 'Lattitude-Longtitude not valid' );
			return FALSE;
		}
		for($i=0; $i < count($pieces); $i++) {
			if(!is_numeric($pieces[$i])) {
				$this->form_validation->set_message ( 'validate_latlong', 'Lattitude-Longtitude not valid' );
				return FALSE;
			}
		}
		return TRUE;
	}
}