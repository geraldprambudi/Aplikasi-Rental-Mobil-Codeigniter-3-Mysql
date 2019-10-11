<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Register_model extends CI_Model
	{
		
		public function getRegister() {
            $email = $this->input->post('email', true);
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email'    => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_role' => 1,
                'created_at' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congrats. Please Login</div>');
            redirect('auth');
		}
	}
?>