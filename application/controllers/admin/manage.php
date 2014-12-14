<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {
	
	
	public function index() {
		$this->load->view('admin/dashboard');
	}

	public function show_new_post(){
		$this->load->view('admin/new_post');
	}

	//show all users
	public function get_all_user(){		
		//$this->load->view('admin/dashboard');
		$this->load->model('admin/manage_user_model');
		$q = $this->manage_user_model->get_all_users();
		$data = array('all_users' => $q);
		$this->load->view('admin/manage_user_view', $data);	
		
	}
	public function do_delete_user($id){
		$this->load->model('admin/manage_user_model');
		$q = $this->manage_user_model->delete_user($id); 
		$this->get_all_user();
	}
	//edit user
	public function show_edit_user($id){
		$this->load->model('admin/manage_user_model'); 
		$q = $this->manage_user_model->get_user($id);
		$data = array('current_user' => $q);
		$this->load->view('admin/edit_user_view', $data); 
	}
	public function do_edit_user(){
		$this->form_validation->set_rules ( 'username', 'User Name', 'trim|required|min_length[4]|callback_validateUsernameSp|callback_validateUsernameNotEx' );
		$id = $this->input->post('id');

		if ($this->form_validation->run() == FALSE){
			$this->show_edit_user($id); 
		} else {		
			$username = $this->input->post('username');
			$fullname = $this->input->post('fullname');
			$dob = $this->input->post('dob');
			$email = $this->input->post('email'); 
			$account_type = $this->input->post('account_type');
			$gender = $this->input->post('gender');
				$data = array (
					'fullname' => $fullname,
					'dob' => date('Y-m-d', strtotime($dob)), 
					'username' => $username, 
					'email' => $email, 
					'account_type' => $account_type,
					'gender' => $gender
				);
			$this->load->model('admin/manage_user_model'); 
			$q = $this->manage_user_model->edit_user($id, $data);
			$this->get_all_user();
		}
	}
	//create user
	public function show_create_user(){
		$this->load->view('admin/create_user_view');

	}
	public function do_create_user(){
		//echo "start create user";
		$this->form_validation->set_rules ( 'username', 'User Name', 'trim|required|min_length[4]|callback_validateUsernameSp|callback_validateUsernameNotEx' );
		$this->form_validation->set_rules ( 'password', 'Password', 'trim|required|min_length[4]|callback_validatePwdStr' );
		$this->form_validation->set_rules ( 'email', 'Email Address', 'trim|required|valid_email|callback_validateEmail' );

		if ($this->form_validation->run() == FALSE){
			$this->show_create_user(); 
		} else {
			$username = $this->input->post('username');
			$fullname = $this->input->post('fullname');
			$password = $this->input->post('password');
			$dob = $this->input->post('dob');
			$email = $this->input->post('email'); 
			$account_type = (int) $this->input->post('account_type');
			$gender = $this->input->post('gender');
			$data = array (
					'fullname' => $fullname,
					'dob' => date('Y-m-d', strtotime($dob)), 
					'password' => $password,
					'username' => $username, 
					'email' => $email, 
					'account_type' => $account_type,
					'gender' => $gender
			); 
			$this->load->model('admin/manage_user_model'); 
			$this->manage_user_model->create_user($data); 
			$this->get_all_user(); 
		}
		
	}
	
	//form validation
	//check username existance
	public function validateUsernameNotEx() {
		$this->load->model ( 'admin/manage_user_model' );
		$username = $this->input->post ( 'username' );
		$q = $this->manage_user_model->validateUsername ( $username );
		if ($q) {
			$this->form_validation->set_message ( 'validateUsernameNotEx', 'Username ' . $username . ' already exists!' );
			return FALSE;
		}
	}
	//check username with special characters
	public function validateUsernameSp() {
		$username = $this->input->post ( 'username' );
		if (! ctype_alnum ( $username )) {
			$this->form_validation->set_message ( 'validateUsernameSp', 'No special characters in username!' );
			return FALSE;
		}
	}
	//check password strength
	public function validatePwdStr() {
		$password = $this->input->post ( 'password' );
		if (strlen ( $password ) < 8) {
			$this->form_validation->set_message ( 'validatePwdStr', 'Password too short!' );
			return FALSE;
		}
		
		if (! preg_match ( "#[0-9]+#", $password )) {
			$this->form_validation->set_message ( 'validatePwdStr', 'Password must include at least one number!' );
			return FALSE;
		}
		
		if (! preg_match ( "#[a-zA-Z]+#", $password )) {
			$this->form_validation->set_message ( 'validatePwdStr', 'Password must include at least one letter!' );
			return FALSE;
		}
	}
	//check email existance
	public function validateEmail() {
		$this->load->model ( 'admin/manage_user_model' );
		$email = $this->input->post ( 'email' );
		$query = $this->manage_user_model->validateEmail ( $email );
		
		if ($query) {
			$this->form_validation->set_message ( 'validateEmail', 'Your email is registered for another account' );
			return FALSE;
		}
	}
	

}