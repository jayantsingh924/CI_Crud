<?php

class User_Model extends CI_Model
{
  public function __construct(){
     parent::__construct();
     $this->load->database();
  }

public function insert($data)
      {
        return $this->db->insert('users',$data);
         
      }


public function fetch_all()
      {
        return $this->db->get('users')->result_array();
         
      }

public function fetch_data($id)
      {
        $this->db->where('id', $id);
        $sql = $this->db->get('users');
        return $sql;
         
      }  

public function update($id,$data)
       {

          $this->db->where('id',$id);
          $this->db->update('users', $data);
        } 
        
public function delete_data($id)
        {
          $this->db->where('id', $id);
          $this->db->delete('users');
          //echo $this->db->last_query(); die();
        }

public function log_in($uemail, $upass)
      {
        $this->db->where('email', $uemail);
        $this->db->where('pass', $upass);
        $query = $this->db->get('users');

      if($query->num_rows() > 0)
        {
            return true;
        }
    else
       {
         return false;
       }   
      }        

}



?>
