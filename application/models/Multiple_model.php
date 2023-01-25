<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Multiple_model extends CI_Model
{
    public function cekData()
    {
        $this->db->limit(1);
        $this->db->order_by('group_image', 'DESC');
        return $this->db->get('upload')->row_array();
    }

    public function upload($insert, $data)
    {
        $this->db->insert_batch('upload', $insert);
        $this->db->set('main_image', 1);
        $this->db->where('image', $data);
        $this->db->update('upload');
        return $this->db->affected_rows();
    }

    public function getDataGroup()
    {
        $this->db->where('main_image =', 1);
        $this->db->group_by('group_image');
        return $this->db->get('upload')->result_array();
    }

    public function detailImage($group)
    {
        return $this->db->get_where('upload', ['group_image' => $group])->result_array();
    }
}
