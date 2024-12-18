<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
			redirect('auth');
        }  
    }
	public function index(){
        $this->db->from('saran');
        $saran = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Saran',
            'saran' => $saran,
        );
		$this->template->load('template_admin','admin/saran_index',$data);
	}
    public function delete_data($id){
        $where = array('id_saran' => $id);
        $this->db->delete('saran', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di hapus</div>');
        redirect('admin/saran');
    }
}
