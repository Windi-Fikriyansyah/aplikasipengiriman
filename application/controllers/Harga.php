<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Harga_model');
    }
    public function index()
    {
        $data['judul'] = "Harga";

        $data['harga'] = $this->Harga_model->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('harga/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Data Harga";
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('harga/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Harga_model->simpan();
            redirect('harga');
        }
    }

    public function hapus()
    {
        $id = $this->input->post('id_harga');
        $this->Harga_model->hapus($id);
        redirect('harga');
    }

    public function ubah($id)
    {
        $data['judul'] = "Data Harga";
        $harga = $this->Harga_model->get_id($id);

        $this->form_validation->set_rules('harga', 'harga', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            if ($harga > 0) {
                $data['ubah_harga'] = $this->Harga_model->get_id($id);
                $this->load->view('templates/header', $data);
                $this->load->view('harga/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $pesan = "Data tidak ditemukan";
                $url = base_url('harga');
                echo "<script>
                alert('$pesan');
                location='$url';
                </script>";
            }
        } else {
            $this->Harga_model->ubah();
            redirect('harga');
        }
    }
}
