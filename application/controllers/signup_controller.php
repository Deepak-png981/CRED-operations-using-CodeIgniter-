<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_controller extends CI_Controller {

	
	public function index()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('f_name', 'First Name', 'required');
        $this->form_validation->set_rules('l_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('pincode', 'Pincoode', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required'); 
        $this->form_validation->set_rules('gander', 'Gander', 'required'); 
		$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/^[0-9]{10}$/]');
		// $this->form_validation->set_rules('phone', 'phone', 'required');

		if ($this->form_validation->run())
		{
			$post = $this->input->post();
			$insert = array(
				'user_f_name'=>$post['f_name'],
				'user_l_name'=>$post['l_name'],
				'user_email'=>$post['email'],
				'user_pass'=>md5($post['password']),
				'address'=>$post['address'],
				'city'=>$post['city'],
				'state'=>$post['state'],
				'pincode'=>$post['pincode'],
				'phone'=>$post['phone'],
				'gender'=>$post['gander']
			);

			$this->load->model('signup_model');
			$this->signup_model->index($insert);
									
		}
		else
		{	
			$this->load->view('signup');
		}
    }
       
        public function form()
	{
       
			$this->load->view('signup');
		}
		
	}
	

