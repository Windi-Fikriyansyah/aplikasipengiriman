<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Kendaraan_model');
        $this->load->model('Supir_model');
        
    }
    public function index()
    {
        
        $data['judul'] = "Data Kendaraan";

        $data['kendaraan'] = $this->Kendaraan_model->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('kendaraan/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = "data Kendaraan";
        $data['supir'] = $this->Supir_model->tampil_data();
        
        $data['kendaraan'] = $this->Kendaraan_model->tampil_data();
        $this->form_validation->set_rules('no_polisi', 'no_polisi', 'required|trim');
        $this->form_validation->set_rules('merk', 'merk', 'required|trim');
        $this->form_validation->set_rules('no_mesin', 'no mesin', 'required|trim');
        $this->form_validation->set_rules('tahun', 'tahun', 'required|trim');
        $this->form_validation->set_rules('warna', 'warna', 'required|trim');
        $this->form_validation->set_rules('supir', 'supir', 'required|trim');
        

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('kendaraan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kendaraan_model->simpan();
            redirect('kendaraan');
        }
    }

    public function hapus()
    {
        $id = $this->input->post('id_kendaraan');
        $this->Kendaraan_model->hapus($id);
        redirect('kendaraan');
    }

    public function ubah($id)
    {
        $data['judul'] = "Data kendaraan";
        $data['supir'] = $this->Supir_model->tampil_data();
        
        $kendaraan= $this->Kendaraan_model->get_id($id);
        $data['ubah_kendaraan'] = $this->Kendaraan_model->get_id($id);

        $this->form_validation->set_rules('no_polisi', 'no_polisi', 'required|trim');
        $this->form_validation->set_rules('merk', 'merk', 'required|trim');
        $this->form_validation->set_rules('no_mesin', 'no mesin', 'required|trim');
        $this->form_validation->set_rules('tahun', 'tahun', 'required|trim');
        $this->form_validation->set_rules('warna', 'warna', 'required|trim');
        $this->form_validation->set_rules('supir', 'supir', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            if ($kendaraan > 0) {
                $data['ubah_kendaraan'] = $this->Kendaraan_model->get_id($id);
                $this->load->view('templates/header', $data);
                $this->load->view('kendaraan/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $pesan = "Data tidak ditemukan";
                $url = base_url('kendaraan');
                echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
            }
        } else {
            $this->Kendaraan_model->ubah();
            $pesan = "Data berhasil diupdate";
            $url = base_url('kendaraan');
            echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }

    
}
