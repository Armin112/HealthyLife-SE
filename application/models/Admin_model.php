<?php
class Admin_model extends CI_model{

    public function add_disease_func($disease){
        $this->db->insert('disease', $disease);   
    }

    public function add_drug_func($drug){
        $this->db->insert('drug', $drug);   
    }


    function show_all_users()
    {
        $this->db->select("id,firstname, lastname, username, email, type");
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    function show_all_diseases()
    {
        $this->db->select("id,title, content, tags, suggested_drug, date");
        $this->db->from('disease');
        $query = $this->db->get();
        return $query->result();
    }

    
    function show_all_drugs()
    {
        $this->db->select("id,title, date");
        $this->db->from('drug');
        $query = $this->db->get();
        return $query->result();
    }

    function delete_user($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    function delete_disease($id){
        $this->db->where('id', $id);
        $this->db->delete('disease');
    }


    function delete_drug($id){
        $this->db->where('id', $id);
        $this->db->delete('drug');
    }

    public function disease_check($title){
        $this->db->select('*');
        $this->db->from('disease');
        $this->db->where('title',$title);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
      }

      public function drug_check($title){
        $this->db->select('*');
        $this->db->from('drug');
        $this->db->where('title',$title);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
      }


}