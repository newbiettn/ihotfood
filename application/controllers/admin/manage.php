<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {
	
	public function index() {
		$this->load->view('admin/dashboard');
	}
	public function create_new_post(){
		$this->load->view('admin/new_post');
	}
}