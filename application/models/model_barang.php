<?php 
    class Model_barang extends CI_Model{
        public function tampilData(){
            return $this->db->get('tbl_barang');
        }

        public function tambahBarang($data, $table){
            $this->db->insert($table,$data);
        }

        public function editBarang($where, $table){
            return $this->db->get_where($table, $where);
        }

        public function updateData($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function hapusData($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function find($id){
            $result = $this->db->where('id_barang', $id)
                                ->limit(1)
                                ->get('tbl_barang');
            
            if ($result->num_rows()> 0) {
                return $result->row();
            }else {
                return array();
            }
        }

        public function detailBarang($id_barang){
            $result = $this->db->where('id_barang', $id_barang)->get('tbl_barang');
            if ($result->num_rows() > 0) {
                return $result->result();
            }else {
                return false;
            }
        }

        public function getKeyword($keyword){
            $this->db->select('*');
            $this->db->from('tbl_barang');
            $this->db->like('nama_barang', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('kategori', $keyword);
            $this->db->or_like('harga', $keyword);
            $this->db->or_like('stok', $keyword);
            
            return $this->db->get()->result();
        }
    }

?>