<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Karyawan";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // Jika usernya ada
        if ($user) {
            // verikasi password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'id_role' => $user['id_role']
                ];

                $this->session->set_userdata($data);

                // id role
                // 1 : admin
                // 2 : karyawan
                if ($user['id_role'] == 1) {
                    redirect('admin');
                } else {
                    redirect('karyawan');
                }


            } else {
                // password salah
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email not registered!</div>');
            redirect('auth');
        }
    }

    public function register() 
    {   
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', ['is_unique' => 'This username has already registered!', 'required' => 'Silahkan isi username anda']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',['is_unique' => 'This email has already registered!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match',
            'min_length' => 'Password to short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

        if ($this->form_validation->run() == FALSE) 
        {   
            $data['title'] = "Registrasi";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $this->load->model('Register_model', 'register');
            $data['regModel'] = $this->register->getRegister(); 
        }
            
    }

}
