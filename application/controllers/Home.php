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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home_view');
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
