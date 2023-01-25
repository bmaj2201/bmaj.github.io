<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datacv_model extends CI_Model

{
    public function getdatacv($limit, $start)
    {
        return $this->db->get('data_cv', $limit, $start)->result_array();
    }
    public function hitungSemuaCv()
    {
        return $this->db->get('data_cv')->num_rows();
    }
}
