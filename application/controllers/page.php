<?php
class Page extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('nav');
	}		
	public function index(){
		$this->load->view('home');
	}
	
}
?>