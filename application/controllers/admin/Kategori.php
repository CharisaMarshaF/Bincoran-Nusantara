<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Kategori_model');
        if($this->session->userdata('level')==NULL){
			redirect('auth');
        }    
    }

	public function index(){
        
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'      => $kategori
        );

		$this->template->load('template_admin','admin/kategori_index',$data);
	}
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-success alert-dismissible text-white" role="alert">nama kategoori sudah ada</div>
            ');
            redirect('admin/kategori');
            
        }
        $this->Kategori_model->simpan();
        $this->session->set_flashdata('alert','
        <div class="alert alert-success mb-1" role="alert">
        Berhasil menambahkan Kategori Konten
        </div>
        ');
        redirect('admin/kategori');
    }
    public function delete_data($id){
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di hapus</div>');
        redirect('admin/kategori');
    }
    public function update(){
        $this->Kategori_model->update();
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di edit</div>'); 
        redirect('admin/kategori');
    }

}
