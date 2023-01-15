<?php
class Kapal_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('kapal')->result_array();
    }

    public function simpan()
    {
        $data = [
            "nama_kapal" => $this->input->post('kapal'),
        ];
        $this->session->set_flashData('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->insert('kapal', $data);
    }

    public function hapus($id)
    {
        $this->session->set_flashData('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->where('id', $id);
        $this->db->delete('kapal');
    }
    public function get_id($id)
    {

        return $this->db->get_where('kapal', ['id' => $id])->row_array();
    }


    public function ubah()
    {

        $data = [
            "nama_kapal" => $this->input->post('kapal'),
        ];

        $this->session->set_flashData('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kapal', $data);
    }

    public function get($id = null)
    //membuat 1 fungsi untuk menampilkan semua data
    //dan menampilkan data per id/satu data
    {
        $this->db->select('*');
        $this->db->from('kapal');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        return $this->db->get();
    }
}
