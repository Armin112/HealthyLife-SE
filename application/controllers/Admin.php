<?php
 
class Admin extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

  	$this->load->helper('url');
  	$this->load->model('admin_model');
    $this->load->library('session');
}

public function index(){

   }

public function admin_users(){
    $query = $this->admin_model->show_all_users();
    $data['users'] = null;
    $proba = "tri";
    if($query){
     $data['users'] =  $query;
    }

        $this->load->view('header');
		$this->load->view('navbar');
        $this->load->view('admin_users_view', $data);
		$this->load->view('footer');
   
}

public function delete_user()
{
    //product id 
    $id = $this->uri->segment(3);
    $this->admin_model->delete_user($id);
    $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the user successfully.');
    redirect('admin/admin_users');
}
}

