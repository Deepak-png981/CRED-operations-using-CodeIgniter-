<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
			$this->load->view('login'); 

	}
	public function about()
	{
		
		$this->load->view('about');
	}
	public function view()
	{
	
		$this->load->view('index');
	}
}
