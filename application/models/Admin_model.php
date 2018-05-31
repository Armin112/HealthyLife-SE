<?php
class Admin_model extends CI_model{

    function show_num_of_users(){
        $this->db->select("id");
        $this->db->from('users');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function show_num_of_diseases(){
        $this->db->select("id");
        $this->db->from('disease');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function show_num_of_drugs(){
        $this->db->select("id");
        $this->db->from('drug');
        $query = $this->db->get();
        return $query->num_rows();
    }


    //USERS
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

    //COMMENTS
    public function add_comment($comment){
        $this->db->insert('comments', $comment);  
    }

    function show_blog_comments($post_id)
    {
        $this->db->select("id,firstname, lastname, username, email,message, post_id, post_category, date");
        $this->db->from('comments');
        $this->db->where('post_category', "blog");
        $this->db->where('post_id', "$post_id");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
       
    }

    function delete_comment($id){
        $this->db->where('id', $id);
        $this->db->delete('comments');
    }

    //DISEASES
    public function add_disease_func($disease){
        $this->db->insert('disease', $disease);   
    }

    function show_all_diseases()
    {
        $this->db->select("id,title, content,excerpt,  tags, suggested_drug,suggested_drug_title, date");
        $this->db->from('disease');
        $query = $this->db->get();
        return $query->result();
    }

    function show_searched_diseases($disease)
    {
        $this->db->select("id,title, content,excerpt,  tags, suggested_drug,suggested_drug_title, date");
        $this->db->from('disease');
        $this->db->like('title', $disease['search_disease']);
        $query = $this->db->get();
        return $query->result();
    }

    function get_suggested_drug($id)
    {
        $this->db->select("title");
        $this->db->from('drug');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if($query->num_rows()>0) {
            $data = $query->row_array(); 
            $value = $data['title']; 
            return $value;      
          }  
    }

    function delete_disease($id){
        $this->db->where('id', $id);
        $this->db->delete('disease');
    }

    function get_single_disease($id){
        $this->db->select("id,title, content,excerpt, tags, suggested_drug,suggested_drug_title, date");
        $this->db->from('disease');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_disease($disease){
        $this->db->set('title', $disease['title']);
        $this->db->set('content', $disease['content']);
        $this->db->set('excerpt', $disease['excerpt']);
        $this->db->set('tags', $disease['tags']);
        $this->db->set('suggested_drug', $disease['suggested_drug']);
        $this->db->where('id', $disease['id']);
        $this->db->update('disease');  
    }


    //DRUGS
    public function add_drug_func($drug){
        $this->db->insert('drug', $drug);   
    }

    function show_all_drugs()
    {
        $this->db->select("id,title,excerpt, tags, category, date");
        $this->db->from('drug');
        $query = $this->db->get();
        return $query->result();
    }

    function delete_drug($id){
        $this->db->where('id', $id);
        $this->db->delete('drug');
    }

    function get_single_drug($id){
        $this->db->select("id,title, content,excerpt, tags, category, date");
        $this->db->from('drug');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_drug($drug){
        $this->db->set('title', $drug['title']);
        $this->db->set('content', $drug['content']);
        $this->db->set('excerpt', $drug['excerpt']);
        $this->db->set('tags', $drug['tags']);
        $this->db->set('category', $drug['category']);
        $this->db->where('id', $drug['id']);
        $this->db->update('drug');  
    }
   
    //BLOG
    public function add_blog_func($blog){
        $this->db->insert('blog', $blog);   
    }

    function show_all_blogs()
    {
        $this->db->select("id,title,excerpt,tags, date");
        $this->db->from('blog');
        $query = $this->db->get();
        return $query->result();
    }

    function delete_blog($id){
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }

    function get_single_blog($id){
        $this->db->select("id,title, content,excerpt, tags, date");
        $this->db->from('blog');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_blog($blog){
        $this->db->set('title', $blog['title']);
        $this->db->set('content', $blog['content']);
        $this->db->set('excerpt', $blog['excerpt']);
        $this->db->set('tags', $blog['tags']);
        $this->db->where('id', $blog['id']);
        $this->db->update('blog');  
    }

}