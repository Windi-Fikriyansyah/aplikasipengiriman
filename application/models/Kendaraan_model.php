<?php
class Kendaraan_model extends CI_Model
{

    public function tampil()
    {
        return $this->db->get('kendaraan')->result_array();
    }
    public function tampil_data()
    {

        return $this->db->get('v_kendaraan')->result_array();
    }

    public function simpan()
    {
        $data = [

            "no_polisi" => $this->input->post('no_polisi'),
            "merk" => $this->input->post('merk'),
            "no_mesin" => $this->input->post('no_mesin'),
            "tahun" => $this->input->post('tahun'),
            "warna" => $this->input->post('warna'),
            "id_supir" => $this->input->post('supir')

        ];
        $this->session->set_flashData('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->insert('kendaraan', $data);
    }

    public function hapus($id)
    {
        $this->session->set_flashData('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->where('id_kendaraan', $id);
        $this->db->delete('kendaraan');
    }
    public function get_id($id)
    {

        return $this->db->get_where('v_kendaraan', ['id_kendaraan' => $id])->row_array();
    }


    public function ubah()
    {

        $data = [
            "no_polisi" => $this->input->post('no_polisi'),
            "merk" => $this->input->post('merk'),
            "no_mesin" => $this->input->post('no_mesin'),
            "tahun" => $this->input->post('tahun'),
            "warna" => $this->input->post('warna'),
            "id_supir" => $this->input->post('supir')

        ];

        $this->session->set_flashData('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->db->where('id_kendaraan', $this->input->post('id_kendaraan'));
        $this->db->update('kendaraan', $data);
    }


    public function get($id = null)
    //membuat 1 fungsi untuk menampilkan semua data
    //dan menampilkan data per id/satu data
    {
        $this->db->select('*');
        $this->db->from('kendaraan');
        if ($id != null) {
            $this->db->where('id_kendaraan', $id);
        }
        return $this->db->get();
    }
}
