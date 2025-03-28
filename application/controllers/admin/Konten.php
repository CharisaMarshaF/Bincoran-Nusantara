<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Konten_model');
        if($this->session->userdata('level')==NULL){
			redirect('auth');
        }    
    }

	public function index(){
        
        $this->db->from('konten a');
        $this->db->join('user c','a.username=c.username','left');

        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Konten',
            'konten'        => $konten
        );

		$this->template->load('template_admin','admin/konten_index',$data);
	}
    public function simpan(){
        $namafoto = date('YmdMis').'.jpg';
        $config['upload_path']       = 'assets/upload/konten';
        $config['max_size'] = 500 * 1024;
        $config['file_name']         = $namafoto;
        $config['allowed_types']     = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible text-white" role="alert">Ukuran foto terlalu besar</div>
            ');
            redirect('admin/konten');
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data  = array('upload_data' => $this->upload->data());
        }
        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->flashdata('notifikasi','
            <div class="alert alert-success alert-dismissible text-white" role="alert">nama kategoori sudah ada</div>
            ');
            redirect('admin/konten');
            
        }
        $data = array(
            'judul'          => $this->input->post('judul'),
            'keterangan'     => $this->input->post('keterangan'),
            'tanggal'        => date('Y-m-d'),
            'foto'           => $namafoto,
            'username'       => $this->session->userdata('username'),
            'slug'           => str_replace(' ','-',$this->input->post('judul')),
        );
        $this->db->insert('konten',$data);       
        $this->session->set_flashdata('notifikasi', '
        <div class="rounded-md px-5 py-4 mb-2 bg-green-500 text-black shadow-md">
            ✅  Produk berhasil disimpan!
        </div>
        ');
        redirect('admin/konten');

    }
    public function delete_data($id){
        $filename = FCPATH . '/assets/upload/konten/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/konten/".$id);
            }
        $where = array('foto' => $id);
        $this->db->delete('konten', $where);
        $this->session->set_flashdata('notifikasi', '
        <div class="rounded-md px-5 py-4 mb-2 bg-green-500 text-black shadow-md">
            ✅  Produk berhasil dihapus!
        </div>
        ');
        redirect('admin/konten');
    }
    
    
    public function update() {
        $id_konten = $this->input->post('id_konten');
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $foto_lama = $this->input->post('nama_foto'); // Ambil foto lama dari input hidden
        $tanggal = date('Y-m-d');
        $slug = url_title($judul, '-', true);
    
        // Konfigurasi Upload
        $config['upload_path']   = 'assets/upload/konten/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name']     = time() . '_' . $_FILES['foto']['name'];
        $config['overwrite']     = false;
    
        $this->load->library('upload', $config);
        $nama_foto_baru = $foto_lama; // Default tetap foto lama
    
        if (!empty($_FILES['foto']['name'])) { // Periksa apakah ada file baru
            if ($this->upload->do_upload('foto')) {
                $fileData = $this->upload->data();
                $nama_foto_baru = 'assets/upload/konten/' . $fileData['file_name']; // Simpan path relatif
                
                // Hapus foto lama jika ada
                if ($foto_lama && file_exists($foto_lama)) {
                    unlink($foto_lama);
                }
            } else {
                $this->session->set_flashdata('notifikasi', '<div class="bg-red-500 text-white p-3 rounded">' . $this->upload->display_errors() . '</div>');
                redirect('admin/konten');
            }
        }
    
        // Update Data ke Database
        $data = [
            'judul'      => $judul,
            'keterangan' => $keterangan,
            'tanggal'    => $tanggal,
            'slug'       => $slug,
            'foto'       => $nama_foto_baru, // Simpan path foto baru jika diupdate
        ];
    
        $this->db->where('id_konten', $id_konten);
        $this->db->update('konten', $data);
    
        $this->session->set_flashdata('notifikasi', '
        <div class="rounded-md px-5 py-4 mb-2 bg-green-500 text-black shadow-md">
            ✅  Produk berhasil diupdate!
        </div>
        ');        redirect('admin/konten');
    }
    
    
    

    
    
}
    

