<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function about()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('about_view');
		$this->load->view('footer');
	}
}
