<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function add()
	{
		$user = $this->User_model;
		$validation = $this->form_validation; //objek form validation
        $validation->set_rules($user->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $user->save();
            redirect("login");
        } else {
			redirect("register");
		}
	}
}
