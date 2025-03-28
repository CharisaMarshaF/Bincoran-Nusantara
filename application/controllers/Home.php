<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Konten_model');
        $this->load->library('pagination');
        $this->load->helper('url');

    }
    public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $this->db->limit(4); 

        $konten = $this->db->get()->result_array();
        $recentpost = $this->Konten_model->recentpost();

        $data = array(
            'judul'   => "Beranda | Binco Ran Nusantara",
            'konfig'  => $konfig,
            'konten' => $konten,

            'galeri' => $galeri,
            'caraousel' => $caraousel,
           


        );
        
		$this->load->view('beranda',$data);
    }
	public function blog() {
        $this->load->library('pagination');
        
        $konfig = $this->db->get('konfigurasi')->row();
        $galeri = $this->db->get('galeri')->result_array();
        $caraousel = $this->db->get('caraousel')->result_array();
        
        
        $recentpost = [];
        $recentfooter = [];
    
        $this->db->from('konten a');
        $this->db->order_by('id_konten', 'DESC');
        $this->db->limit(10); 
        $konten = $this->db->get()->result_array();
    
        if (empty($konten)) {
            log_message('error', 'Konten tidak ditemukan atau kosong.');
        }
    
        $data = array(
            'judul' => "Beranda | Binco Ran Nusantara",
            'konfig' => $konfig,
            'galeri' => $galeri,
            'caraousel' => $caraousel,
            'konten' => $konten,
            'recentpost' => $recentpost,
            'recentfooter' => $recentfooter,
        );
    
        $this->load->view('blog', $data);
    }
    
    
    public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('konten');
        $konten = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array(); 
        $data = array(
            'judul'        => "Galeri Foto | Binco Ran Nusantara",
            'konfig'       => $konfig,
            'konten'       => $konten,
            'galeri'       => $galeri,
            'caraousel'       => $caraousel,
        );
         $this->load->view('galeri', $data);
    }
    
}
