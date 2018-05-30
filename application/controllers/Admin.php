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

    //USERS
    public function admin_users(){
        $query = $this->admin_model->show_all_users();
        $data['users'] = null;
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
        
        $id = $this->uri->segment(3);
        $this->admin_model->delete_user($id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the user successfully.');
        redirect('admin/admin_users');
    }

    //DISEASES
    public function add_disease()
        {
            $this->load->view('header');
            $this->load->view('navbar');   
            $this->load->view('add_disease_view');
            $this->load->view('footer');
        }
    
    public function admin_diseases(){
        $query = $this->admin_model->show_all_diseases();
        $data['diseases'] = null;
        if($query){
            $data['diseases'] =  $query;
        }

            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_diseases_view', $data);
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

        if($disease){
        $this->admin_model->add_disease_func($disease);
        $this->session->set_flashdata('success_msg', 'Disease succesfully added.');
        redirect('admin/admin_diseases');
        }
        else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect('/admin/admin_diseases');
        }
    }

    public function admin_edit_disease(){  
        $id = $this->uri->segment(3);
        $query = $this->admin_model->get_single_disease($id);
        $data['single_disease'] = null;
        if($query){
            $data['single_disease'] =  $query;
        }
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_edit_disease_view', $data);
            $this->load->view('footer');
    }

    public function edit_disease(){  
    $treba = $this->input->post('id');
        $disease=array(
           
        'id'=>$this->input->post('id'),
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content'),
        'excerpt'=>substr($this->input->post('content'), 0, 50),
        'tags'=>$this->input->post('tags'),
        'suggested_drug'=>$this->input->post('suggested_drug')
        );
        print_r($disease);

    $this->admin_model->edit_disease($disease);
    if($disease)
    {
    
    $this->session->set_flashdata('success_msg', 'Congratulations, you updated disease successfully.');
    redirect('admin/admin_edit_disease/'.$treba);

    }
    else{
    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    $this->load->view("admin/admin_edit_disease");

    }
    }

    public function delete_disease()
    {  
        $id = $this->uri->segment(3);
        $this->admin_model->delete_disease($id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the disease successfully.');
        redirect('admin/admin_diseases');
    }

    public function get_single_disease()
    {  

        
    
    }

    

    //DRUG
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

        if($drug){
        $this->admin_model->add_drug_func($drug);
        $this->session->set_flashdata('success_msg', 'Drug succesfully added.');
        redirect('admin/admin_drugs');
        }
        else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect('/admin/admin_drugs');
        }
    }


    public function admin_drugs(){
        $query = $this->admin_model->show_all_drugs();
        $data['drugs'] = null;
        if($query){
        $data['drugs'] =  $query;
        }

            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_drugs_view', $data);
            $this->load->view('footer');
    
    }

    public function delete_drug()
    {
        
        $id = $this->uri->segment(3);
        $this->admin_model->delete_drug($id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the drug successfully.');
        redirect('admin/admin_drugs');
    }

    public function admin_edit_drug(){  
        $id = $this->uri->segment(3);
        $query = $this->admin_model->get_single_drug($id);
        $data['single_drug'] = null;
        if($query){
            $data['single_drug'] =  $query;
        }
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_edit_drug_view', $data);
            $this->load->view('footer');
    }

    public function edit_drug(){  
        $treba = $this->input->post('id');
            $drug=array(
               
            'id'=>$this->input->post('id'),
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content'),
            'excerpt'=>substr($this->input->post('content'), 0, 50),
            'tags'=>$this->input->post('tags'),
            'category'=>$this->input->post('category')
            );
            print_r($drug);
    
        $this->admin_model->edit_drug($drug);
        if($drug)
        {
        
        $this->session->set_flashdata('success_msg', 'Congratulations, you updated drug successfully.');
        redirect('admin/admin_edit_drug/'.$treba);
    
        }
        else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("admin/admin_edit_drug");
    
        }
        }

    public function get_single_drug()
    {  

        
    
    }


    //BLOG
    public function add_blog()
    {
        $this->load->view('header');
        $this->load->view('navbar');   
        $this->load->view('add_blog_view');
        $this->load->view('footer');
    }

    public function add_blog_func(){
        $blog=array(
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content'),
        'tags'=>$this->input->post('tags'),
        'excerpt'=>substr($this->input->post('content'), 0, 50),
        'date'=> date('Y-m-d')
            );
            print_r($blog);


        if($blog){
        $this->admin_model->add_blog_func($blog);
        $this->session->set_flashdata('success_msg', 'Blog succesfully added.');
        redirect('admin/admin_blogs');
        }
        else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect('/admin/admin_blogs');
        }
    }


    public function admin_blogs(){
        $query = $this->admin_model->show_all_blogs();
        $data['blogs'] = null;
        if($query){
        $data['blogs'] =  $query;
        }

            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_blogs_view', $data);
            $this->load->view('footer');
    
    }

    public function delete_blog()
    {
        
        $id = $this->uri->segment(3);
        $this->admin_model->delete_blog($id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the blog successfully.');
        redirect('admin/admin_blogs');
    }

    public function admin_edit_blog(){  
        $id = $this->uri->segment(3);
        $query = $this->admin_model->get_single_blog($id);
        $data['single_blog'] = null;
        if($query){
            $data['single_blog'] =  $query;
        }
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_edit_blog_view', $data);
            $this->load->view('footer');
    }

    public function edit_blog(){  
        $treba = $this->input->post('id');
            $blog=array(
               
            'id'=>$this->input->post('id'),
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content'),
            'excerpt'=>substr($this->input->post('content'), 0, 50),
            'tags'=>$this->input->post('tags')
            );
            print_r($blog);
    
        $this->admin_model->edit_blog($blog);
        if($blog)
        {
        
        $this->session->set_flashdata('success_msg', 'Congratulations, you updated blog successfully.');
        redirect('admin/admin_edit_blog/'.$treba);
    
        }
        else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("admin/admin_edit_blog");
    
        }
        }

    public function get_single_blog()
    {  

        
    
    }



}



