<?php

class Manage_User_Model extends CI_Model{


	// get all users in database
	function get_all_users(){
		$query = $this->db->get('users');
		return $query;
	}

	//delete user with input ID 
	function delete_user($id){
		$this->db->delete('users', array('id'=>$id)); 
		return true;
	}

	//get an user with input ID for editting user
	function get_user($id){
		$query = $this->db->get_where('users', array('id' => $id)); 
		return $query;
	}

	//update information to user with ID
	function edit_user($id, $data){
		$this->db->where('id', $id);
		$query = $this->db->update('users', $data);
		return $query;
	}

	//insert new user 
	function create_user($data){
		$query = $this->db->insert('users', $data); 
		//echo $query;
	}
	//validation of username 
	function validateUsername($username){
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		if($query->num_rows == 1){
			return true;
		}
	}
	//validation of email
	 function validateEmail($email){
	 	$this->db->where('email', $email);
	 	$query = $this->db->get('users');
	 	if($query->num_rows == 1){
	 		return true;
	 	}
	 }
}

?>