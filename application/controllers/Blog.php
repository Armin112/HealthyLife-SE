<?php
 
class Blog extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

  	$this->load->helper('url');
      $this->load->model('blog_model');
      $this->load->model('admin_model');
    $this->load->library('session');
}

    public function index(){
        $query = $this->admin_model->show_all_blogs();
        $data['blogs'] = null;
        if($query){
            $data['blogs'] =  $query;
        
        }

        
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('blog_view', $data);
            $this->load->view('footer');
    }

    public function single()
    {  
        $id = $this->uri->segment(3);
        $query = $this->admin_model->get_single_blog($id);
        $data['single_blog'] = null;
        if($query){
            $data['single_blog'] =  $query;
        }

        $query1 = $this->admin_model->show_all_blogs();
        $data['blogs'] = null;
        if($query1){
            $data['blogs'] =  $query1;
        }
        
        $query_comment = $this->admin_model->show_blog_comments($id);
        $data['comments'] = null;
        if($query_comment){
        $data['comments'] =  $query_comment;
        }
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('single_blog_view', $data);
            $this->load->view('footer');
    }

    public function delete_comment()
    {
        $blog_id = $this->uri->segment(4);
        $post_id = $this->uri->segment(3);
        $this->admin_model->delete_comment($post_id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the comment  successfully.');
        redirect('blog/single/'.$blog_id);
    }

   
}