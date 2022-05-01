<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	
	public function index()
	{ 

        $email=$this->session->userdata('email');
        $this->load->model('Alldata_model');
        $data['result']=$this->Alldata_model->index($email);
        $this->load->view('index',$data); 
	
        }

    public function delete($id)
	{
       
                $this->load->model('Alldata_model');
                $data=$this->Alldata_model->delete($id) ;
                $this->index();
   
        }
        public function edit($id)
        {

            $this->load->model('Alldata_model');
            $data['update']=$this->Alldata_model->edit($id) ;  
                $this->load->view('update_form',$data);
                // $this->load->view('header');
                // $this->load->view('footer');

        }
           public function update($id)
        {
                echo "<pre>";
                $data = array(
                    'user_f_name'=>$this->input->post('f_name'),
                    'user_l_name'=>$this->input->post('l_name'),
                    'user_email'=>$this->input->post('email'),
                    'user_pass'=>md5($this->input->post('password')),
                    'address'=>$this->input->post('address'),
                    'city'=>$this->input->post('city'),
                    'state'=>$this->input->post('state'),
                    'pincode'=>$this->input->post('pincode'),
                    'phone'=>$this->input->post('phone'),
                    'gender'=>$this->input->post('gander')
                );
                // print_r($data); die;
    
                $this->load->model('Alldata_model');
                $this->Alldata_model->update($data,$id);
                redirect('Admin_controller/index'); 
                // $this->index();
        }
           
	
}
