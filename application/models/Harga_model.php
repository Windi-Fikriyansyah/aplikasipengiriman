<?php
class Harga_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('harga')->result_array();
    }

    public function simpan()
    {
        $data = [
            "harga" => $this->input->post('harga')
        ];
        $this->session->set_flashData('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->insert('harga', $data);
    }

    public function hapus($id)
    {
        $this->session->set_flashData('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->where('id_harga', $id);
        $this->db->delete('harga');
    }
    public function get_id($id)
    {
        return $this->db->get_where('harga', ['id_harga' => $id])->row_array();
    }

    public function ubah()
    {
        $data = [
            "harga" => $this->input->post('harga')
        ];
        $this->session->set_flashData('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Diupdate</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->where('id_harga', $this->input->post('id_harga'));
        $this->db->update('harga', $data);
    }

    public function get($id = null)

    {
        $this->db->select('*');
        $this->db->from('kelas');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        return $this->db->get();
    }
}
