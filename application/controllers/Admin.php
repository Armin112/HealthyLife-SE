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

public function add_disease()
	{
		$this->load->view('header');
		$this->load->view('navbar');   
		$this->load->view('add_disease_view');
		$this->load->view('footer');
    }
    
    public function add_disease_func(){
        $disease=array(
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content'),
        'tags'=>$this->input->post('tags'),
        'suggested_drug'=>$this->input->post('suggested_drug'),
        'excerpt'=>substr($this->input->post('content'), 0, 50),
        'date'=> date('Y-m-d')
          );
          print_r($disease);
    
    $disease_check=$this->admin_model->disease_check($disease['title']);
    
    if($disease_check){
    $this->admin_model->add_disease_func($disease);
    $this->session->set_flashdata('success_msg', 'Disease succesfully added.');
    redirect('admin/admin_diseases');
    }
    else{
    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    redirect('/admin/admin_diseases');
    }
    }

    public function add_drug()
	{
		$this->load->view('header');
		$this->load->view('navbar');   
		$this->load->view('add_drug_view');
		$this->load->view('footer');
    }
    
    public function add_drug_func(){
        $drug=array(
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content'),
        'tags'=>$this->input->post('tags'),
        'category'=>$this->input->post('category'),
        'excerpt'=>substr($this->input->post('content'), 0, 50),
        'date'=> date('Y-m-d')
          );
          print_r($drug);
    
    $drug_check=$this->admin_model->drug_check($drug['title']);
    
    if($drug_check){
    $this->admin_model->add_drug_func($drug);
    $this->session->set_flashdata('success_msg', 'Drug succesfully added.');
    redirect('admin/admin_drugs');
    }
    else{
    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    redirect('/admin/admin_drugs');
    }
    }


public function admin_diseases(){
    $query = $this->admin_model->show_all_diseases();
    $data['diseases'] = null;
    $proba = "tri";
    if($query){
     $data['diseases'] =  $query;
    }

        $this->load->view('header');
		$this->load->view('navbar');
        $this->load->view('admin_diseases_view', $data);
		$this->load->view('footer');
   
}

public function admin_drugs(){
    $query = $this->admin_model->show_all_drugs();
    $data['drugs'] = null;
    $proba = "tri";
    if($query){
     $data['drugs'] =  $query;
    }

        $this->load->view('header');
		$this->load->view('navbar');
        $this->load->view('admin_drugs_view', $data);
		$this->load->view('footer');
   
}

public function delete_user()
{
    
    $id = $this->uri->segment(3);
    $this->admin_model->delete_user($id);
    $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the user successfully.');
    redirect('admin/admin_users');
}

public function delete_disease()
{
    
    $id = $this->uri->segment(3);
    $this->admin_model->delete_disease($id);
    $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the disease successfully.');
    redirect('admin/admin_diseases');
}

public function delete_drug()
{
    
    $id = $this->uri->segment(3);
    $this->admin_model->delete_drug($id);
    $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the drug successfully.');
    redirect('admin/admin_drugs');
}

}

