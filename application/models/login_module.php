<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_module extends CI_Model {

	public function index($email,$pass)
	{
        // echo $email , $pass; die; 
       $qre=$this->db->where(['user_email'=>$email ,'user_pass'=>md5($pass)])
                     ->get('user');
            
                    if($qre->num_rows()>0){
                       
                        // echo "hello".$email;
                        // $this->load->libraries('session');
                       $this->session->set_userdata('email', $email); 
                       redirect(base_url('Admin_controller/index'));
                    }	else {
                        echo "<script>alert('Invalid Email/Password')</script>";
                        $this->load->view('login');
                    }
     }
	
}
