<?php
    class Registrasi extends CI_ControLLer{
        public function index(){
            $this->form_validation->set_rules('nama', 'Nama', 'required', ['required'=>'Nama Tidak Boleh Kosong']);
            $this->form_validation->set_rules('username', 'Username', 'required', ['required'=>'Username Wajib diIsi!']);
            $this->form_validation->set_rules('password', 'Password', 'required|matches[password2]', ['required'=>'Password Wajib diIsi!', 'matches'=>'Password Tidak Sama Dengan Konfirmasi Password']);
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header');
                $this->load->view('registrasi');
                $this->load->view('templates/footer');
            }else {
                $data = array('id'=>'', 'nama'=>$this->input->post('nama'), 'username'=>$this->input->post('username'), 'password'=>$this->input->post('password'), 'role_id'=>2);
                $this->db->insert('tbl_user', $data);
                redirect('auth/login');
            }
        }
    }
?>