<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKeluar extends CI_Model {

    public function get_all()
    {
        return $this->db->get('barang_keluar')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('barang_keluar', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('barang_keluar');
    }
}
