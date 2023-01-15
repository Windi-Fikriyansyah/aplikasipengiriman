<?php
class Transaksi_model extends CI_Model
{

  public function no_otomatis()
  {
    $this->db->select('no_pengirim');
    $this->db->order_by('no_pengirim DESC');
    return $this->db->get('transaksi')->result_array();
  }

  public function tampil()
  {
    return $this->db->get('v_transaksi')->result_array();
  }

  public function tampil_data()
  {
    return $this->db->get_where('v_transaksi')->result_array();
  }

  public function simpan($post)
  {
    $data = array(
      'no_pengirim' => $post['no_pengirim'],
      'tgl' => $post['tgl'],
      'id_pelanggan' => $post['pelanggan'],
      'penerima' => $post['penerima'],
      'telpn' => $post['telpn'],
      'alamat_penerima' => $post['alamat'],
      'asal' => $post['asal'],
      'id_kapal' => $post['kapal'],
      'total' => $post['total']
    );
    $this->db->insert('transaksi', $data);

    $cart = $this->cart->contents();
    foreach ($cart as $crt) {
      // $id = $crt['id'];
      $jumlah = $crt['qty'];
      $hrg = $crt['price'];
      $subtotal = $jumlah * $hrg;

      $data = array(
        'no_pengirim' => $post['no_pengirim'],
        'jenis_barang' => $crt['name'],
        'colly' => $jumlah,
        'berat' => $crt['berat'],
        'harga' => $hrg,
        'subtotal' => $subtotal
      );
      $this->db->insert('detail_transaksi', $data);
    }
  }

  public function get_transaksi($id)
  {
    return $this->db->get_where('v_transaksi', ['no_pengirim' => $id])->row_array();
  }

  public function get_detail($id)
  {
    return $this->db->get_where('detail_transaksi', ['no_pengirim' => $id])->result_array();
  }

  public function hapus_transaksi($id)
  {
    $this->db->where('no_pengirim', $id);
    $this->db->delete('transaksi');
  }

  public function hapus_detail($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('detail_transaksi');
  }
}
