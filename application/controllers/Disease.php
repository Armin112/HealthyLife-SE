<?php
 
class Disease extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

      $this->load->helper('url');
      $this->load->model('disease_model');
  	  $this->load->model('admin_model');
      $this->load->library('session');
      $single_disease_id = "";
}

    public function index(){

        

    }
    

    public function single()
    {  
        $id = $this->uri->segment(3);
        $num_of_unlikes = $this->admin_model->show_num_of_unlikes($id);
        $data['num_of_unlikes'] =  $num_of_unlikes;

        $num_of_likes = $this->admin_model->show_num_of_likes($id);
        $data['num_of_likes'] =  $num_of_likes;

       
        $single_disease_id = $id;
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

        $query_unlikes = $this->admin_model->get_all_unlikes();
        $data['unlikes'] = null;
        if($query_unlikes){
            $data['unlikes'] =  $query_unlikes;
        }

            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('single_disease_view', $data);
            $this->load->view('footer');
    }


    public function unlike(){     
        $drug_id = $this->uri->segment(3);
        $disease_id = $this->uri->segment(4);
        $unlike_data=array(
            'user'=>$this->session->userdata('username'),
            'disease'=>$disease_id,
            'drug'=>$drug_id,
            'date'=> date('Y-m-d')
                );
                print_r($unlike_data);
    
            if($unlike_data){
            $this->admin_model->unlike_func($unlike_data);
           
            redirect('disease/single/'.$disease_id);
            }
            else{
                redirect('disease/single/'.$disease_id);
            }
    }

    public function like(){   
        $drug_id = $this->uri->segment(3);
        $disease_id = $this->uri->segment(4);
        $like_data=array(
            'user'=>$this->session->userdata('username'),
            'disease'=>$disease_id,
            'drug'=>$drug_id,
            'date'=> date('Y-m-d')
                );
                print_r($like_data);
    
            if($like_data){
            $this->admin_model->like_func($like_data);
           
            redirect('disease/single/'.$disease_id);
            }
            else{
                redirect('disease/single/'.$disease_id);
            }
    }


    public function delete_comment()
    {
        
        $post_id = $this->uri->segment(3);
        $this->admin_model->delete_comment($post_id);
        $this->session->set_flashdata('success_msg', 'Congratulations, you deleted the comment  successfully.');
        redirect('disease/single/'.$post_id);
    }
}