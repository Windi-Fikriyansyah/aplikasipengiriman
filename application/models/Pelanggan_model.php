<?php
class Pelanggan_model extends CI_Model
{

    public function tampil()
    {
        return $this->db->get('pelanggan')->result_array();
    }
    public function tampil_data()
    {

        return $this->db->get('pelanggan')->result_array();
    }

    public function simpan()
    {
        $data = [

            "nama_pelanggan" => $this->input->post('nama_pelanggan'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "alamat" => $this->input->post('alamat'),
            "telepon" => $this->input->post('telepon')

        ];
        $this->session->set_flashData('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->insert('pelanggan', $data);
    }

    public function hapus($id)
    {
        $this->session->set_flashData('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }
    public function get_id($id)
    {

        return $this->db->get_where('pelanggan', ['id_pelanggan' => $id])->row_array();
    }


    public function ubah()
    {

        $data = [
            "nama_pelanggan" => $this->input->post('nama_pelanggan'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "alamat" => $this->input->post('alamat'),
            "telepon" => $this->input->post('telepon')


        ];
        $this->session->set_flashData('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Diupdate</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
        $this->db->update('pelanggan', $data);
    }






    public function get($id = null)

    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        if ($id != null) {
            $this->db->where('id_pelanggan', $id);
        }
        return $this->db->get();
    }
    public function get_($id = null)

    {

        $this->db->from('siswa');
        if ($id != null) {
            $this->db->where('id_siswa', $id);
        }
        return $this->db->get();
    }
}
