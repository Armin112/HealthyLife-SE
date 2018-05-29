<?php
class Admin_model extends CI_model{

    function show_all_users()
    {
        $this->db->select("id,firstname, lastname, username, email, type");
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    function delete_user($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}