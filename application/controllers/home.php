<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->model('prestasi_siswa_model');
        $this->load->model('prestasi_sekolah_model');
        $this->load->model('galeri_model');
    }

    public function index()
    {
        $data['berita'] = $this->berita_model->get();
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }
    public function sejarah()
    {
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/sejarah');
        $this->load->view('template/footer');
    }
    public function visimisi()
    {
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/visimisi');
        $this->load->view('template/footer');
    }
    public function tentang()
    {
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/tentang');
        $this->load->view('template/footer');
    }
    public function detail($id){
        // $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->berita_model->getById($id);
        $this->load->view("template/header", $data);
        $this->load->view('template/topbar', $data);
        $this->load->view("home/detail_berita", $data);   
        $this->load->view("template/footer", $data);
    }

    public function prestasi_siswa(){
        $data['prestasi_siswa'] = $this->prestasi_siswa_model->get();
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/prestasi_siswa',$data);
        $this->load->view('template/footer');
    }

    public function prestasi_sekolah(){
        $data['prestasi_sekolah'] = $this->prestasi_sekolah_model->get();
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/prestasi_sekolah',$data);
        $this->load->view('template/footer');
    }

    public function detail_prestasi_siswa($id){
        // $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['prestasi_siswa'] = $this->prestasi_siswa_model->getById($id);
        $this->load->view("template/header", $data);
        $this->load->view('template/topbar', $data);
        $this->load->view("home/detail_prestasi_siswa", $data);   
        $this->load->view("template/footer", $data);    
    }

    public function detail_prestasi_sekolah($id){
        // $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['prestasi_sekolah'] = $this->prestasi_sekolah_model->getById($id);
        $this->load->view("template/header", $data);
        $this->load->view('template/topbar', $data);
        $this->load->view("home/detail_prestasi_sekolah", $data);   
        $this->load->view("template/footer", $data);    
    }

    public function galeri(){
        $data['galeri'] = $this->galeri_model->get();
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('home/galeri',$data);
        $this->load->view('template/footer');
    }
}