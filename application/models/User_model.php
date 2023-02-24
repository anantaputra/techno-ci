<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table = 'user';

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];
    }

    public function save()
    {
        $data = array(
            "fullname" => $this->input->post("name"),
            "username" => $this->input->post("username"),
            "password" => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
        );
        return $this->db->insert($this->table, $data);
    }

    public function login_user($username,$password)
	{
        $query = $this->db->get_where('user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                // $this->session->set_userdata('username',$username);
				// $this->session->set_userdata('nama',$data_user->nama);
				// $this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
}