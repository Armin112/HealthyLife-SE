<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
    parent::__construct();

  	$this->load->helper('url');
  	$this->load->model('user_model');
    $this->load->library('session');
 
}

public function index()
{
$this->load->view("signup_view.php");
}

public function login(){
    $this->load->view("login_view.php");    
}

function user_profile(){
    $this->load->view('user_profile_view.php');  
 }

public function register_user(){
 
    $user=array(
    'firstname'=>$this->input->post('firstname'),
    'lastname'=>$this->input->post('lastname'),
    'username'=>$this->input->post('username'),
    'email'=>$this->input->post('email'),
    'password'=>md5($this->input->post('password')),
    'type' => 2
      );
      print_r($user);

$username_check=$this->user_model->username_check($user['username']);

if($username_check){
$this->user_model->register_user($user);
$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
redirect('home/login');

}
else{

$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
redirect('user');

}
}

function login_user(){
    $user_login=array(
   
    'username'=>$this->input->post('username'),
    'password'=>md5($this->input->post('password'))
   
      );
   
      $data=$this->user_model->login_user($user_login['username'],$user_login['password']);
        if($data)
        {
          $this->session->set_userdata('id',$data['id']);
          $this->session->set_userdata('firstname',$data['firstname']);
          $this->session->set_userdata('lastname',$data['lastname']);
          $this->session->set_userdata('username',$data['username']);
          $this->session->set_userdata('email',$data['email']);
   
          $this->load->view('header');
          $this->load->view('navbar');
          $this->load->view('home_view');
          $this->load->view('footer');
   
        }
        else{
          $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
          $this->load->view("login_view.php");
   
        }
  }

public function user_logout(){
    $this->session->sess_destroy();
    redirect('home/login', 'refresh');
  }

}
?>