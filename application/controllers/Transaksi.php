<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(['Transaksi_model', 'Harga_model', 'Pelanggan_model', 'Kapal_model']);
    }


    public function index()
    {
        $data['judul'] = "Transaksi";

        $data['cart'] = $this->cart->contents();
        $data['harga'] = $this->Harga_model->tampil_data();
        $data['pelanggan'] = $this->Pelanggan_model->tampil_data();
        $data['kapal'] = $this->Kapal_model->tampil_data();

        $tampil = $this->Transaksi_model->no_otomatis();
        if (empty($tampil[0]['no_pengirim'])) {
            $no = date('Ymd') . "000001";
        } else {
            $a = date('Ymd');
            $urut = $tampil[0]['no_pengirim'];
            $no_1 = substr($urut, 8, 6);
            $hasil = ((int) $no_1) + 1;
            $hasil_2 = sprintf('%06s', $hasil);
            $no = $a . $hasil_2;
        }
        $data['no_pengirim'] = $no;

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
    }

    function tambah_cart()
    {
        $no = date('s');
        $data = array(
            'id' => $no,
            'name' => $this->input->post('jenis_barang'),
            'price' => $this->input->post('harga'),
            'qty' => $this->input->post('colly'),
            'berat' => $this->input->post('berat'),
        );
        $this->cart->insert($data);
        redirect('transaksi');
    }

    function hapus_cart($rowid)
    {
        $this->cart->remove($rowid);
        redirect('transaksi');
    }

    public function simpan()
    {
        $this->Transaksi_model->simpan($_POST);
        $this->cart->destroy();
        $url = base_url('transaksi/cetak');
        echo "<script>
                alert('Data Berhasil di Simpan.');
                location='$url';
                </script>";
    }

    public function data_transaksi()
    {
        $data['judul'] = "Data Transaksi";
        $data['data_transaksi'] = $this->Transaksi_model->tampil_data();
        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/data_transaksi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->Transaksi_model->hapus_transaksi($id);
        $this->Transaksi_model->hapus_detail($id);
        $pesan = "Data Berhasil di Hapus";
        $url = base_url('transaksi/data_transaksi');
        echo "<script>
        alert('$pesan');
        location='$url';
    </script>";
    }

    public function cetak()
    {
        $tampil = $this->Transaksi_model->no_otomatis();
        $id = $tampil[0]['no_pengirim'];
        $data['cetak'] = $this->Transaksi_model->get_transaksi($id);
        $data['detail'] = $this->Transaksi_model->get_detail($id);
        $this->load->view('transaksi/cetak', $data);
    }
    public function cetak_faktur($id)
    {
        $data['cetak'] = $this->Transaksi_model->get_transaksi($id);
        $data['detail'] = $this->Transaksi_model->get_detail($id);

        $this->load->view('transaksi/cetak', $data);
    }
}
