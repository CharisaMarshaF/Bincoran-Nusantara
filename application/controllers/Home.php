<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Konten_model');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->helper('language');


    }
    public function index(){
        $language = $this->session->userdata('language') ?? 'indonesian';
        $this->lang->load('common', $language);
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $this->db->limit(6); 

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
    public function set_language($language = 'indonesian') {
        $this->session->set_userdata('language', $language);
        redirect('home');
    }
	public function blog() {
        $language = $this->session->userdata('language') ?? 'indonesian';
        $this->lang->load('common', $language);
        $this->load->library('pagination');
        $this->load->helper('text');

        $keyword = $this->input->get('keyword', true);

        $config['base_url'] = base_url('home/blog');
        $config['total_rows'] = $this->get_total_konten($keyword);
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 3;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0;

        $konten = $this->get_filtered_konten($keyword, $config['per_page'], $page);
        $pagination_links = $this->pagination->create_links();

        if ($this->input->is_ajax_request()) {
            echo json_encode([
                'konten' => $konten,
                'pagination' => $pagination_links
            ]);
            return;
        }


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
            'pagination' => $pagination_links

        );
    
        $this->load->view('blog', $data);
    }
    private function get_filtered_konten($keyword = null, $limit = 8, $start = 0) {
        $this->db->select('*');
        $this->db->from('konten');
        if (!empty($keyword)) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('keterangan', $keyword);
        }
        $this->db->order_by('id_konten', 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }

    private function get_total_konten($keyword = null) {
        $this->db->from('konten');
        if (!empty($keyword)) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('keterangan', $keyword);
        }
        return $this->db->count_all_results();
    }
    
    public function galeri(){
        $language = $this->session->userdata('language') ?? 'indonesian';
        $this->lang->load('common', $language);
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

    public function detail($slug = null) {
        $language = $this->session->userdata('language') ?? 'indonesian';
        $this->lang->load('common', $language);
        if (!$slug) {
            show_404(); // atau redirect ke halaman lain
        }
    
        $this->db->from('konten');
        $this->db->where('slug', $slug);
        $konten = $this->db->get()->row_array();
    
        if (!$konten) {
            show_404(); // slug tidak ditemukan
        }
    
        $konfig = $this->db->get('konfigurasi')->row();
        $recentpost = $this->Konten_model->recentpost(); // opsional jika ada
        $galeri = $this->db->get('galeri')->result_array();
        $caraousel = $this->db->get('caraousel')->result_array();
    
        $data = array(
            'judul' => $konten['judul'] . " | Binco Ran Nusantara",
            'konten' => $konten,
            'konfig' => $konfig,
            'recentpost' => $recentpost,
            'galeri' => $galeri,
            'caraousel' => $caraousel,
        );
    
        $this->load->view('detail', $data);
    }
    

    
    
}
