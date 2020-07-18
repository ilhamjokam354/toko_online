<?php 
    class Kategori extends CI_ControLLer{
        public function elektronik(){
            $data['elektronik']= $this->model_kategori->elektronik()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('elektronik', $data);
            $this->load->view('templates/footer');
        }

        public function pakaian_pria(){
            $data['pakaian_pria']= $this->model_kategori->pakaianPria()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_pria', $data);
            $this->load->view('templates/footer');
        }

        public function pakaian_wanita(){
            $data['pakaian_wanita']= $this->model_kategori->pakaianWanita()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_wanita', $data);
            $this->load->view('templates/footer');
        }

        public function pakaian_anakanak(){
            $data['pakaian_anakanak']= $this->model_kategori->pakaianAnakAnak()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_anakanak', $data);
            $this->load->view('templates/footer');
        }

        public function pakaian_olahraga(){
            $data['pakaian_olahraga']= $this->model_kategori->pakaianOlahraga()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_olahraga', $data);
            $this->load->view('templates/footer');
        }
    }
?>