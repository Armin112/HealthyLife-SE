<?php
 
class Drug extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

  	$this->load->helper('url');
      $this->load->model('drug_model');
      $this->load->model('admin_model');
    $this->load->library('session');
}

    public function index(){
    }

    public function single()
    {  
        $id = $this->uri->segment(3);
        $query = $this->admin_model->get_single_drug($id);
        $data['single_drug'] = null;
        if($query){
            $data['single_drug'] =  $query;
        }

        $query1 = $this->admin_model->show_all_drugs();
        $data['drugs'] = null;
        if($query1){
            $data['drugs'] =  $query1;
        }
        
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('single_drug_view', $data);
            $this->load->view('footer');
    }

    public function herbs(){
        $query_herbs = $this->drug_model->show_all_herbs();
        $data['herbs'] = null;
        if($query_herbs){
            $data['herbs'] =  $query_herbs;
        }
		
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('herbs_view', $data);
		$this->load->view('footer');
    }
    

    public function fruits(){
        $query_fruits = $this->drug_model->show_all_fruits();
        $data['fruits'] = null;
        if($query_fruits){
            $data['fruits'] =  $query_fruits;
        }
		
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('fruits_view', $data);
		$this->load->view('footer');
    }

    public function vegetables(){
        $query_vegetables = $this->drug_model->show_all_vegetables();
        $data['vegetables'] = null;
        if($query_vegetables){
            $data['vegetables'] =  $query_vegetables;
        }
		
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('vegetables_view', $data);
		$this->load->view('footer');
    }

   
}
    