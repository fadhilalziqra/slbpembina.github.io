<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
        $this->load->model('berita_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data";
        $data['berita'] = $this->berita_model->get();
        $this->load->view('layout_admin/header');
        $this->load->view('admin/vw_admin',$data);
        $this->load->view('layout_admin/footer');
    }
    
    // public function tambahberita(){
    //     $data['berita'] = $this->berita->get();
    //     $this->load->view('layout_admin/header');
    //     $this->load->view('admin/vw_tambah_berita', $data);
    //     $this->load->view('layout_admin/footer');
    // }


    public function tambah(){
        $data['judul'] = "Halaman Tambah Berita";
        // $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->berita_model->get();
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
        'required' => 'Judul Wajib di isi'
        ]);
        $this->form_validation->set_rules('tag', 'Tag', 'required', [
        'required' => 'Tag Wajib di isi',
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
        'required' => 'Deskripsi Wajib di isi',
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Tanggal Wajib di isi',
            ]);
        if ($this->form_validation->run() == false) {
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_tambah_berita", $data);
        $this->load->view("layout_admin/footer",$data);
        } else {
        $data=[
            'judul'=> $this->input->post('judul'),
            'tag'=> $this->input->post('tag'),
            'deskripsi'=> $this->input->post('deskripsi'),
            'tanggal' => $this->input->post('tanggal'),   
            ];
        $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/berita/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->berita_model->insert($data, $upload_image);
            // $this->session->set_flashdata('message', '<div  lass="alert alert-success" role="alert">Data Sembako Berhasil Ditambah!</div>');
            redirect('admin');
        }
    }   

     
    public function detail($id){
        $data['judul'] = "Halaman Detail Sembako";
        // $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->berita_model->getById($id);
        $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_detail_berita", $data);   
        $this->load->view("layout_admin/footer", $data);
    }   



    public function edit($id){
        $data['judul'] = "Halaman Edit Berita";
        $data['berita'] = $this->berita_model->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib di isi'
            ]);
            $this->form_validation->set_rules('tag', 'Tag', 'required', [
            'required' => 'Tag Wajib di isi',
            ]);
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi',
            ]);
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
                'required' => 'Tanggal Wajib di isi',
                ]);
        if ($this->form_validation->run() == false) {
       $this->load->view("layout_admin/header", $data);
        $this->load->view("admin/vw_edit_berita", $data);
        $this->load->view("layout_admin/footer",$data);
        } else {
        $data=[
            'judul'=> $this->input->post('judul'),
            'tag'=> $this->input->post('tag'),
            'deskripsi'=> $this->input->post('deskripsi'),
            'tanggal' => $this->input->post('tanggal'),   
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/berita/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['berita']['gambar'];
                    if ($old_image != '1.jpg') {
                        unlink(FCPATH . 'assets/img/berita/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->berita_model->update(['id' => $id], $data, $upload_image);
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sembako Berhasil Diubah!</div>');
            redirect('admin');
        }
    }

    public function hapus($id){
        $this->berita_model->delete($id);
        redirect('admin');
    }

    


}