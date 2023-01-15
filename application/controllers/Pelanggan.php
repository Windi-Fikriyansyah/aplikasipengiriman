<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Pelanggan_model');
        
        
    }
    public function index()
    {
       
        $data['judul'] = "Data Pelanggan";

        $data['pelanggan'] = $this->Pelanggan_model->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Data Pelanggan";
        $data['pelanggan'] = $this->Pelanggan_model->tampil_data();
        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim');
        

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pelanggan_model->simpan();
            redirect('pelanggan');
        }
    }

    public function hapus()
    {
        $id = $this->input->post('id_pelanggan');
        $this->Pelanggan_model->hapus($id);
        redirect('pelanggan');
    }

    public function ubah($id)
    {
        $data['judul'] = "Data Pelanggan";
       
        $data['ubah_pelanggan'] = $this->Pelanggan_model->get_id($id);

        $pelanggan = $this->Pelanggan_model->get_id($id);
        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            if ($pelanggan > 0) {
                $data['ubah_pelanggan'] = $this->Pelanggan_model->get_id($id);
                $this->load->view('templates/header', $data);
                $this->load->view('pelanggan/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $pesan = "Data tidak ditemukan";
                $url = base_url('pelanggan');
                echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
            }
        } else {
            $this->Pelanggan_model->ubah();
            $pesan = "Data berhasil diupdate";
            $url = base_url('pelanggan');
            echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }

    
}
