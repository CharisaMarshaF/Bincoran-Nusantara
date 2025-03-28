<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten_model extends CI_Model {
    public function update_konten($id_konten, $data) {
        $this->db->where('id_konten', $id_konten);
        return $this->db->update('konten', $data);
    }

    public function get_all_konten() {
        return $this->db->get('konten')->result_array();
    }

    public function get_konten_by_id($id_konten) {
        return $this->db->get_where('konten', ['id_konten' => $id_konten])->row_array();
    }

       public function search($search){
        $this->db->select('a.judul, a.slug, a.tanggal, a.foto, a.keterangan, c.username');
        $this->db->from('konten a');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $this->db->like('slug', $search);

        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result_array();
        }else {
            return [];
        }
    }
    public function recentpost() {
        $this->db->select('a.judul, a.slug, a.tanggal, a.foto, a.keterangan, c.username');
        $this->db->from('konten a');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->order_by('a.id_konten', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
    public function recentgaleri() {
        $this->db->select('a.judul, a.isifoto, a.foto, a.tanggal');
        $this->db->from('galeri a');
        $this->db->order_by('a.id_galeri','DESC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }
    public function recentfooter(){
        $this->db->select('judul, slug');
        $this->db->from('konten a');
        $this->db->order_by('a.id_konten','DESC');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    public function galeri(){
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $data = array( 
            'galeri'  => $galeri,
        );
        $this->load->view('galeri_nda',$data);
    }

    function lihat($sampai, $dari) {
        $this->db->limit($sampai, $dari);  
        $query = $this->db->get('konten');
        return $query->result_array();  
    }

    function jumlah(){
        $query = $this->db->get('konten');
        return $query->num_rows();
    }
}
