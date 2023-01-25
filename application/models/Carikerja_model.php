<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carikerja_model extends CI_Model
{
    public function getcarikerja($limit, $start)
    {
        return $this->db->get('cari_kerja', $limit, $start)->result_array();
    }

    public function hitungSemuaDatakerja()
    {
        return $this->db->get('cari_kerja')->num_rows();
    }
}
