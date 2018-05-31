<?php
 
class Disease extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

      $this->load->helper('url');
      $this->load->model('disease_model');
  	  $this->load->model('admin_model');
      $this->load->library('session');
}

    public function index(){
    }


    public function single()
    {  
        $id = $this->uri->segment(3);
        $query = $this->admin_model->get_single_disease($id);
        $data['single_disease'] = null;
        if($query){
            $data['single_disease'] =  $query;
        }

        $query1 = $this->admin_model->show_all_diseases();
        $data['diseases'] = null;
        if($query1){
            $data['diseases'] =  $query1;
        }

        $query_comment = $this->admin_model->show_disease_comments($id);
        $data['comments'] = null;
        if($query_comment){
        $data['comments'] =  $query_comment;
        }
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('single_disease_view', $data);
            $this->load->view('footer');
    }

    public function delete_comment()
    {
        
        $post_id = $this->uri->segment(3);
        $this->admin_model->delete_comment($post_id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the comment  successfully.');
        redirect('disease/single/'.$post_id);
    }
}