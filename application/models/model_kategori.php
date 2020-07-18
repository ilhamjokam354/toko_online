<?php 
    class Model_kategori extends CI_Model{

        public function elektronik(){
            return $this->db->get_where('tbl_barang', array('kategori'=>'Elektronik'));
        }

        public function pakaianPria(){
            return $this->db->get_where('tbl_barang', array('kategori'=>'Pakaian Pria'));
        }

        public function pakaianWanita(){
            return $this->db->get_where('tbl_barang', array('kategori'=>'Pakaian Wanita'));
        }

        public function pakaianAnakAnak(){
            return $this->db->get_where('tbl_barang', array('kategori'=>'Pakaian Anak Anak'));
        }

        public function pakaianOlahraga(){
            return $this->db->get_where('tbl_barang', array('kategori'=>'Pakaian Olahraga'));
        }
        
    }

?>