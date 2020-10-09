<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{
    public function getDataMhs($filter)
    {
        if (!is_null($filter)) {
            $this->db->like('upper(nama)', strtoupper($filter));
            $sql = $this->db->get('mahasiswa')->result_array();
            //$data['mahasiswa'] = $sql;
        } else {
            $sql = $this->db->get('mahasiswa')->result_array();
        }
        return $sql;
    }
}
