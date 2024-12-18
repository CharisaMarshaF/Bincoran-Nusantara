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
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('saran');
        $saran = $this->db->get()->result_array();
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter();   
        $recentgaleri = $this->Konten_model->recentgaleri();   

        $data = array(
            'judul'   => "Beranda | CharisaAlele",
            'konfig'  => $konfig,
            'kategori' => $kategori,
            'galeri' => $galeri,
            'caraousel' => $caraousel,
            'recentpost' => $recentpost,
            'recentfooter' => $recentfooter,
            'recentgaleri' => $recentgaleri,

            'saran' => $saran,

        );
        
		$this->load->view('beranda',$data);
    }
	public function blog(){
        $this->load->library('pagination');
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('saran');
        $saran = $this->db->get()->result_array();
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter();   
        $search = $this->input->get('search');
    
        if(isset($search)){
            $konten = $this->Konten_model->search($search);
        } else {
            $jumlah = $this->Konten_model->jumlah();
            $config = array();
            $config['base_url'] = base_url().'home/blog';
            $config['per_page'] = 6;
            $config['total_rows'] = $jumlah;  
            $config['num_links'] = $jumlah;
            $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-danger border-danger">';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            $config['attributes'] = array('class' => 'page-link  text-danger');

            
            $this->pagination->initialize($config);
            $dari = $this->uri->segment(3);
    
            $this->db->from('konten a');
            $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
            $this->db->join('user c', 'a.username = c.username', 'left');
            $this->db->order_by('id_konten', 'DESC');

            $this->db->limit($config['per_page'], $dari);

            $konten = $this->db->get()->result_array();

        }
    
        $data['pagination_links'] = $this->pagination->create_links();
    
        $data = array(
            'judul' => "Beranda | CharisaAlele",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'galeri' => $galeri,
            'caraousel' => $caraousel,
            'konten' => $konten,
            'recentpost' => $recentpost,
            'recentfooter' => $recentfooter,
            'saran' => $saran,
            'pagination_links' => $data['pagination_links'],  
        );
    
        $this->load->view('blog', $data);
    }
    
    public function kategori($id = null){    
        if ($id === null) {
            redirect('home/blog');  
        }
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();       
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $recentfooter = $this->Konten_model->recentfooter(); 
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $kategori_data = $this->db->get()->row();
        
        if (!$kategori_data) {
            redirect('home/kategori'); 
        }
    
        $nama_kategori = $kategori_data->nama_kategori;
        $data = array(
            'judul'   => $nama_kategori."| CharisaAlele",
            'nama_kategori' => $nama_kategori,
            'konfig'  => $konfig,
            'kategori' => $kategori,
            'konten'    => $konten,
            'recentfooter' => $recentfooter,
            'caraousel' => $caraousel,
            'galeri' => $galeri,
        );
		$this->load->view('kategori',$data);
    }
    public function artikel($slug){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter(); 
        if(isset($search)){
            $konten = $this->Konten_model->search($search);
        } else {
        } 
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug', $slug);
        $konten = $this->db->get()->row();
        $data = array(
            'judul'   => $konten->judul." | CharisaAlele",
            'konfig'  => $konfig,
            'kategori' => $kategori,
            'recentpost' => $recentpost,
            'recentfooter' => $recentfooter,
            'konten'    => $konten,
            'galeri' => $galeri,
        );
		$this->load->view('detail',$data);
    }
    public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten');
        $konten = $this->db->get()->result_array();
        
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter(); 
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array(); 
        $data = array(
            'judul'        => "Galeri Foto | CharisaAlele",
            'konfig'       => $konfig,
            'kategori'     => $kategori,
            'konten'       => $konten,
            'galeri'       => $galeri,
            'recentpost'   => $recentpost,
            'recentfooter' => $recentfooter,
        );
         $this->load->view('galeri_nda', $data);
    }
    public function saran(){
        $this->db->from('saran');
        $this->db->where('nama',$this->input->post('nama'));
        $data = array(
            'nama'          => $this->input->post('nama'),
            'isi_saran'     => $this->input->post('isi_saran'),
            'tanggal'        => date('Y-m-d'),
            'email'     => $this->input->post('email'),

        );
        $this->db->insert('saran',$data);       
        redirect('home');
    }
}
