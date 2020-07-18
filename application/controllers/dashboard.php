<?php
    class Dashboard extends CI_ControLLer{

        public function __construct(){
            parent::__construct();
            if ($this->session->userdata('role_id') != '2') {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Anda Harus Login Terlebih Dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
            }
        }

        public function search(){
            $keyword = $this->input->post('keyword');
            $data['barang'] = $this->model_barang->getKeyword($keyword);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');

        }

        public function tambahKeKeranjang($id){
            $barang = $this->model_barang->find($id);

            $data = array('id' => $barang->id_barang, 'qty'=>1, 'price'=>$barang->harga, 'name'=>$barang->nama_barang);
            $this->cart->insert($data);
            redirect('dashboard/detailKeranjang');
        }

        public function detailKeranjang(){
            $this->load->view("templates/header");
            $this->load->view("templates/sidebar");
            $this->load->view("keranjang");
            $this->load->view("templates/footer");
        }

        public function hapusKeranjang(){
            $this->cart->destroy();
            redirect('welcome/index');
        }

        public function pembayaran(){
            $this->load->view("templates/header");
            $this->load->view("templates/sidebar");
            $this->load->view("pembayaran");
            $this->load->view("templates/footer");
        }

        public function prosesPesanan(){
            $is_processed = $this->model_invoice->index();
            if ($is_processed) {
            $this->cart->destroy();
            $this->load->view("templates/header");
            $this->load->view("templates/sidebar");
            $this->load->view("proses");
            $this->load->view("templates/footer");
            }else {
                echo "Maaf! Pesanan Anda Gagal diProses";
            }
            
        }

        public function detail($id_barang){
            $data['barang'] = $this->model_barang->detailBarang($id_barang);
            $this->load->view("templates/header");
            $this->load->view("templates/sidebar");
            $this->load->view("detail_barang", $data);
            $this->load->view("templates/footer");

        }
    }
?>