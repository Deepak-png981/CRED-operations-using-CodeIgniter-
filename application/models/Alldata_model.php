<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alldata_model extends CI_Model {

	public function index($email)
	{ 
         $qre=$this->db->get('user')->result_array(); 
       return $qre; 
                    
     }
     public function delete($id)
     { 
  
          $this->db->where('id', $id);
            $this->db->delete('user');
                     
      }
      public function edit($id)
      { 
      
        $this->db->select('*'); 
        $this->db->where('id', $id);
           $row=$this->db->get('user');
            return $row->row_array();
                      
       }
       public function update($update,$id)
       { 
       
      
         $this->db->where('id', $id);
            $row=$this->db->update('user',$update);
            //  return $row->row_array();
                       
        }
    }