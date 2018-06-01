<?php
 
class Admin extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

      $this->load->helper('url');
      $this->load->library('upload');
      $this->load->helper('form');
      $this->load->helper(array('form', 'url'));
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

    function do_upload()
    {
        $image_name = $_FILES["userfile"]['name'];
        $config['file_name'] = $image_name;
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		
    	$this->upload->initialize($config);
		if ( ! $this->upload->do_upload())
		{
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
            echo $config['upload_path'];		
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
            echo $config['upload_path'];
		return $image_name;
		}
        }
        
    //COMMENTS
    public function add_comment()
    {
        $id = $this->input->post('post_id');
        $comment=array(
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'message'=>$this->input->post('message'),
            'post_id'=>$this->input->post('post_id'),
            'post_category'=>$this->input->post('post_category'),
            'date'=> date('Y-m-d')
            );
            print_r($comment);
          
            if($comment){
            $this->admin_model->add_comment($comment);
            $this->session->set_flashdata('success_msg', 'Comment succesfully added.');
            redirect($this->input->post('post_category').'/single/'.$id);
            }
            else{
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect($this->input->post('post_category').'/single/'.$id);
            }
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

            $query1 = $this->admin_model->show_all_drugs();
            $data['drugs_for_disease'] = null;
            if($query1){
            $data['drugs_for_disease'] =  $query1;
            }
        
            $this->load->view('header');
            $this->load->view('navbar');   
            $this->load->view('add_disease_view', $data);
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

        $suggested_drug_id = $this->input->post('suggested_drug');
        $data['proba'] = $this->admin_model->get_suggested_drug($suggested_drug_id);

        $disease=array(
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content'),
        'tags'=>$this->input->post('tags'),
        'suggested_drug'=>$this->input->post('suggested_drug'),
        'suggested_drug_title'=>$data['proba'],
        'excerpt'=>substr($this->input->post('content'), 0, 50),
        'image'=>$this->do_upload(),
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

        $query1 = $this->admin_model->show_all_drugs();
        $data['drugs_for_disease'] = null;
        if($query1){
        $data['drugs_for_disease'] =  $query1;
        }
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('admin_edit_disease_view', $data);
            $this->load->view('footer');
    }

    public function edit_disease(){  
        $suggested_drug_id = $this->input->post('suggested_drug');
        $data['proba'] = $this->admin_model->get_suggested_drug($suggested_drug_id);
       
        
    $treba = $this->input->post('id');
        $disease=array(
           
        'id'=>$this->input->post('id'),
        'title'=>$this->input->post('title'),
        'content'=>$this->input->post('content'),
        'excerpt'=>substr($this->input->post('content'), 0, 50),
        'tags'=>$this->input->post('tags'),
        'suggested_drug'=>$this->input->post('suggested_drug'),
        'suggested_drug_title'=>$data['proba']
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
        'image'=>$this->do_upload(),
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
        'image'=>$this->do_upload(),
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

    function delete(){
        $data=$this->product_model->delete_product();
        echo json_encode($data);
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

    function delete_blog_ajax(){
        $data=$this->admin_model->delete_blog_ajax_model();
        echo json_encode($data);
    }

    function admin_blogs_ajax(){
        $data=$this->admin_model->admin_blogs_ajax_model();
        echo json_encode($data);
    }

    function admin_diseases_ajax(){
        $data=$this->admin_model->admin_diseases_ajax_model();
        echo json_encode($data);
    }

    function admin_drugs_ajax(){
        $data=$this->admin_model->admin_drugs_ajax_model();
        echo json_encode($data);
    }
 



}



