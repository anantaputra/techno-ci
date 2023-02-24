<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($this->User_model->login_user($username,$password))
		{
			redirect('home');
			// echo 'login';
		}
		else
		{
			// echo 'faile';
			// $this->session->set_flashdata('error','Username & Password salah');
			redirect('login');
		}	
	}
}
