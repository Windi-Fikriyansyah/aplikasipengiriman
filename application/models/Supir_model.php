<?php
class Supir_model extends CI_Model
{

    public function tampil()
    {
        return $this->db->get('supir')->result_array();
    }
    public function tampil_data()
    {
        
        return $this->db->get('supir')->result_array();
    }

    public function simpan()
    {
        $data = [

            "no_ktp" => $this->input->post('no_ktp'),
            "nama_supir" => $this->input->post('nama_supir'),
            "alamat" => $this->input->post('alamat'),
            "telepon" => $this->input->post('telepon')
            
        ];
        $this->session->set_flashData('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Ditambahkan</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->insert('supir', $data);
    }

    public function hapus($id)
    {
        $this->session->set_flashData('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        $this->db->where('id_supir', $id);
        $this->db->delete('supir');
    }
    public function get_id($id)
    {
        
        return $this->db->get_where('supir', ['id_supir' => $id])->row_array();
        
    }

    public function get_num($id = null)

    {
        $this->db->select('*');
        $this->db->from('v_siswa');
        if ($id != null) {
            $this->db->where('id_siswa', $id);
        }
        return $this->db->get();
    }
    public function ubah()
    {
        
        $data = [
            "no_ktp" => $this->input->post('no_ktp'),
            "nama_supir" => $this->input->post('nama_supir'),
            "alamat" => $this->input->post('alamat'),
            "telepon" => $this->input->post('telepon')
            

        ];
        $this->session->set_flashData('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Diupdate</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>');
    $this->db->where('id_supir', $this->input->post('id_supir'));
    $this->db->update('supir', $data);
        }
        
    

    

    
    public function get($id = null)

    {
        $this->db->select('*');
        $this->db->from('siswa');
        if ($id != null) {
            $this->db->where('id_siswa', $id);
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
