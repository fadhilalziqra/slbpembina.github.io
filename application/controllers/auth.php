<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login/index');
        }else{
            $auth = $this->model_auth->cek_login();
            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password anda salah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('login/index');
            }else{
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);
                switch($auth->role_id){
                    case 1 : redirect('admin');
                    default: break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/login');
    }
}