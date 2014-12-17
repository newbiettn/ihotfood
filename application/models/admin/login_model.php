<?php

class Login_Model extends CI_Model{

	//validation of password: check the existence of a password for edit user
	function validatePwd($pwd){
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		if($query->num_rows == 1){
			return true;
		}
	}
	
	//validation of username for edit user 
	function validateUsername($username){
		$this->db->where('username', $this->input->post('username'));
		$query = $this->db->get('users');
		if($query->num_rows == 1){
			return true;
		}
	}
	

	// insert a new user to database 
	function create_member(){
		$data=array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'account_type' => $this->input->post('account_type')
		);
		$q = $this->db->insert('users', $data);
		return $q;
	}
}