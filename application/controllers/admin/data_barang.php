<?php 
    class Data_barang extends CI_ControLLer{

        public function __construct(){
            parent::__construct();
            if ($this->session->userdata('role_id') != '1') {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Anda Harus Login Terlebih Dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
            }
        }
        
        public function index(){
            $data['barang'] = $this->model_barang->tampilData()->result();
            $this->load->view('admin/templates_admin/header');
            $this->load->view('admin/templates_admin/sidebar');
            $this->load->view('admin/data_barang', $data);
            $this->load->view('admin/templates_admin/footer');
        }

        public function tambahData(){
            $nama = $this->input->post('nama');
            $keterangan = $this->input->post('ket');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $gambar = $_FILES['gambar']['name'];

            if ($gambar = '') {
                
            }else{
                $config ['upload_path'] = './uploads';
                $config ['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload' , $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Upload Gambar Gagal, Silahkan Cek Kembali
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array('nama_barang' => $nama, 'keterangan' => $keterangan, 'kategori' => $kategori, 'harga' => $harga, 'stok' => $stok, 'gambar' => $gambar);
            $this->model_barang->tambahBarang($data, 'tbl_barang');
            redirect('admin/data_barang/index');
        }

        public function edit($id){
            $where = array('id_barang' => $id);
            $data['barang'] = $this->model_barang->editBarang($where, 'tbl_barang')->result();
            $this->load->view('admin/templates_admin/header');
            $this->load->view('admin/templates_admin/sidebar');
            $this->load->view('admin/edit_barang', $data);
            $this->load->view('admin/templates_admin/footer');
        }

        public function update(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $keterangan = $this->input->post('ket');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $data = array('nama_barang' => $nama, 'keterangan' => $keterangan, 'kategori' => $kategori, 'harga' => $harga, 'stok' => $stok);
            $where = array('id_barang' => $id);

            $this->model_barang->updateData($where, $data, 'tbl_barang');
            redirect('admin/data_barang/index');
        }

        public function hapus($id){
            $where = array('id_barang' => $id);
            $this->model_barang->hapusData($where, 'tbl_barang');
            redirect('admin/data_barang/index');
        }

        public function detail($id_barang){
            $data['barang'] = $this->model_barang->detailBarang($id_barang);
            $this->load->view('admin/templates_admin/header');
            $this->load->view('admin/templates_admin/sidebar');
            $this->load->view('admin/detail_barang', $data);
            $this->load->view('admin/templates_admin/footer');

        }
    }

?>