<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_model extends CI_Model {

	public function index($arr)
	{
                $result = $this->db->insert('user',$arr);
                if($result){

                        $this->load->view('view/index');
                }else{

                        echo "<script>alert('Sorrry Try Again')</script>";
                }
              

              
     }
	
}