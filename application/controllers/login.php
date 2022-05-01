<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	
	public function index()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('userName', 'User_id', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run())
		{
		 	$uid=$this->input->post('userName');
			$pass=$this->input->post('password');
			$this->load->model('login_module');
			$this->login_module->index($uid,$pass);
			
		}
		else
		{
			$this->load->view('login');
		}
	}
	
}
