<?php

class Lap_pengiriman_model extends CI_Model
{

    public function laporan_pengiriman($tgl_mulai, $tgl_sampai)
    {
        $this->db->where('tgl >=', $tgl_mulai);
        $this->db->where('tgl <=', $tgl_sampai);
        return $this->db->get('v_transaksi')->result_array();
    }

    public function total($tgl_awal, $tgl_akhir)
    {
        $this->db->select('SUM(total) as grandtotal');
        $this->db->where('tgl >=', $tgl_awal);
        $this->db->where('tgl <=', $tgl_akhir);
        return $this->db->get('transaksi')->row()->grandtotal;
    }

    public function total_bayar($tgl_awal, $tgl_akhir)
    {
        $this->db->select('SUM(total) as tobar');
        $this->db->where('tgl >=', $tgl_awal);
        $this->db->where('tgl <=', $tgl_akhir);
        return $this->db->get('transaksi')->row()->tobar;
    }

    public function total_perhari()
    {
        $tgl = date('Ymd');
        $this->db->select('SUM(total_bayar) as total_hari');
        return $this->db->get_where('transaksi', ['tgl' => $tgl])->row()->total_hari;
    }

    public function total_perbulan()
    {
        $tgl = date('m');
        $this->db->select('SUM(total_bayar) as total_bulan');
        $this->db->where('MONTH(tgl)', $tgl);
        return $this->db->get('transaksi')->row()->total_bulan;
    }
}
