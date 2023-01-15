<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Supir_model');
        
        
    }
    public function index()
    {
       
        $data['judul'] = "Data Supir";

        $data['supir'] = $this->Supir_model->tampil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('supir/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Data Supir";
        $data['supir'] = $this->Supir_model->tampil_data();
        $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required|trim');
        $this->form_validation->set_rules('nama_supir', 'nama_supir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim');
        

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('supir/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Supir_model->simpan();
            redirect('supir');
        }
    }

    public function hapus()
    {
        $id = $this->input->post('id_supir');
        $this->Supir_model->hapus($id);
        redirect('supir');
    }

    public function ubah($id)
    {
        $data['judul'] = "Data Supir";
       
        $data['ubah_supir'] = $this->Supir_model->get_id($id);

        $supir = $this->Supir_model->get_id($id);
        $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required|trim');
        $this->form_validation->set_rules('nama_supir', 'nama_supir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            if ($supir > 0) {
                $data['ubah_supir'] = $this->Supir_model->get_id($id);
                $this->load->view('templates/header', $data);
                $this->load->view('supir/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $pesan = "Data tidak ditemukan";
                $url = base_url('supir');
                echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
            }
        } else {
            $this->Supir_model->ubah();
            $pesan = "Data berhasil diupdate";
            $url = base_url('supir');
            echo "<script>
            alert('$pesan');
            location='$url';
        </script>";
        }
    }

    public function ubah_status(){
        $this->Data_siswa_model->update_status();
        redirect('data_siswa');
    }
}
