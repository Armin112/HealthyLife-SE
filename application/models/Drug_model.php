<?php
class Drug_model extends CI_model{

    function show_all_herbs()
    {
        $this->db->select("id,title,excerpt, tags, category, date");
        $this->db->from('drug');
        $this->db->where('category', 'Herbs');
        $query = $this->db->get();
        return $query->result();
    }

    function show_all_vegetables()
    {
        $this->db->select("id,title,excerpt, tags, category, date");
        $this->db->from('drug');
        $this->db->where('category', 'Vegetables');
        $query = $this->db->get();
        return $query->result();
    }

    function show_all_fruits()
    {
        $this->db->select("id,title,excerpt, tags, category, date");
        $this->db->from('drug');
        $this->db->where('category', 'Fruits');
        $query = $this->db->get();
        return $query->result();
    }
}