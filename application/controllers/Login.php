<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel');
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
    }

    public function index()
    {

     $this->load->view('login');
    }
     public function auth()
    {
        $email = $this->input->post('email');
        $pwd = $this->input->post('Password');
        $auth = $this->Usermodel->auth($email, $pwd);
        if ($auth == true) {
            if ($this->input->post('remember-me') != '') {
                $key = random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 * 24 * 30);
                $this->Usermodel->update_cookie($key, $email);
            
             
            }
            $sesi = $this->Usermodel->get_user_by_email($email);
            $this->session->set_userdata('id', $sesi['id']);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Email atau Password Salah');
            redirect('login');
        }
}

  public function logout()
    {
     delete_cookie('tigaserangkai');
     $this->session->sess_destroy();
     redirect('login');

    }
}