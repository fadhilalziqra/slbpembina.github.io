<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_prestasi_siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('prestasi_siswa_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data";
        $data['berita'] = $this->prestasi_siswa_model->get();
        $this->load->view('layout_admin/header');
        $this->load->view('admin_prestasi_siswa/vw_prestasi',$data);
        $this->load->view('layout_admin/footer');
    }

    public function tambah(){
        $data['judul'] = "Halaman Tambah Prestasi Siswa";
        // $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->prestasi_siswa_model->get();
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
        $this->load->view("admin_prestasi_siswa/vw_tambah_prestasi", $data);
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
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prestasi_siswa/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->prestasi_siswa_model->insert($data, $upload_image);
            // $this->session->set_flashdata('message', '<div  lass="alert alert-success" role="alert">Data Sembako Berhasil Ditambah!</div>');
            redirect('admin_prestasi_siswa');
        }
    }   


    public function hapus($id){
        $this->prestasi_siswa_model->delete($id);
        redirect('admin_prestasi_siswa');
    }

    public function edit($id){
        $data['judul'] = "Halaman Edit Prestasi Siswa";
        $data['prestasi_siswa'] = $this->prestasi_siswa_model->getById($id);
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
        $this->load->view("admin_prestasi_siswa/vw_edit_prestasi", $data);
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
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prestasi_siswa/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['berita']['gambar'];
                    if ($old_image != '1.jpg') {
                        unlink(FCPATH . 'assets/img/prestasi_siswa/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->prestasi_siswa_model->update(['id' => $id], $data, $upload_image);
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sembako Berhasil Diubah!</div>');
            redirect('admin_prestasi_siswa');
        }
    }
}