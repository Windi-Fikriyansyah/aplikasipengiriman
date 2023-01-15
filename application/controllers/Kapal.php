<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kapal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Kapal_model');
    }
    public function index()
    {

        $data['judul'] = "Data Kapal";

        $data['kapal'] = $this->Kapal_model->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('kapal/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = "data Kapal";
        $this->form_validation->set_rules('kapal', 'Nama Kapal', 'required|trim');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('kapal/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kapal_model->simpan();
            redirect('kapal');
        }
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->Kapal_model->hapus($id);
        redirect('kapal');
    }

    public function ubah($id)
    {
        $data['judul'] = "Data Kapal";

        $kapal = $this->Kapal_model->get_id($id);
        $data['ubah_kapal'] = $this->Kapal_model->get_id($id);

        $this->form_validation->set_rules('kapal', 'Nama Kapal', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            if ($kapal > 0) {
                $data['ubah_kapal'] = $this->Kapal_model->get_id($id);
                $this->load->view('templates/header', $data);
                $this->load->view('kapal/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $pesan = "Data tidak ditemukan";
                $url = base_url('kapal');
                echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
            }
        } else {
            $this->Kapal_model->ubah();
            redirect('kapal');
        }
    }
}
