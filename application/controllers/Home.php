<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
 
		parent::__construct();
	
		$this->load->model('admin_model');
	
	}

	
	public function index()
	{
		
		$query_blog = $this->admin_model->show_all_blogs();
        $data['blogs'] = null;
        if($query_blog){
            $data['blogs'] =  $query_blog;
		}
		
		$query_disease = $this->admin_model->show_all_diseases();
        $data['diseases'] = null;
        if($query_disease){
			$data['diseases'] =  $query_disease;
		}

		$num_of_users = $this->admin_model->show_num_of_users();
		$data['num_of_users'] =  $num_of_users;
		
		$num_of_drugs = $this->admin_model->show_num_of_drugs();
		$data['num_of_drugs'] =  $num_of_drugs;

		$num_of_diseases = $this->admin_model->show_num_of_diseases();
		$data['num_of_diseases'] =  $num_of_diseases;
		
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home_view', $data);
		$this->load->view('footer');
	}

	public function search()
	{
		$data['query_parameter'] = $this->input->get('search_disease');
		$disease=array(
			'search_disease'=>$this->input->get('search_disease')
		);
	

		$searched_diseases = $this->admin_model->show_searched_diseases($disease);
        $data['diseases'] = null;
        if($searched_diseases){
			$data['diseases'] =  $searched_diseases;
	}
	$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('search_view', $data);
		$this->load->view('footer');
	}
	
	public function about()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('about_view');
		$this->load->view('footer');
	}
	
	public function blog()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('blog_view');
		$this->load->view('footer');
	}
	
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('contact_view');
		$this->load->view('footer');
	}
	
	public function herbs()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('herbs_view');
		$this->load->view('footer');
	}

	public function user_profile()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('user_profile_view');
		$this->load->view('footer');
	}

	public function edit_profile()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('edit_profile_view');
		$this->load->view('footer');
	}

	public function admin_users()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$data['title'] = "My Real Title";
   
		$this->load->view('admin_users_view', $data);
		$this->load->view('footer');
	}

	

	public function admin_diseases()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('admin_diseases_view');
		$this->load->view('footer');
	}

	public function admin_drugs()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('admin_drugs_view');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('login_view');
	}

	public function signup()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('signup_view');
	}
	
}
