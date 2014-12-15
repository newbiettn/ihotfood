<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_Restaurant_Model extends CI_Model{

	function get_all_restaurants(){
		$query = $this->db->get('restaurants');
		return $query;
	}

	function delete_restaurant($id){
		$this->db->delete('restaurants', array('id'=>$id)); 
		return true;
	}
	function get_restaurant($id){
		$query = $this->db->get_where('restaurants', array('id' => $id)); 
		return $query;
	}

	function edit_restaurant($id, $data){
		$this->db->where('id', $id);
		$query = $this->db->update('restaurants', $data);
		return $query;
	} 
	function create_restaurant($data){
		$query = $this->db->insert('restaurants', $data); 
		//echo $query;
	}

}