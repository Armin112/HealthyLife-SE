<?php
class User_model extends CI_model{
 
    public function register_user($user){
        $this->db->insert('users', $user);   
    }

    public function edit_user($user){
        $this->db->set('firstname', $user['firstname']);
        $this->db->set('lastname', $user['lastname']);
        $this->db->set('email', $user['email']);
        $this->db->where('id', $user['id']);
        $this->db->update('users');  
    }

    public function login_user($username,$pass){
 
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->where('password',$pass);
       
        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
          return false;
        }    
    }


    public function username_check($username){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
      }

 
}
 
 
?>