<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    // List all your items
    public function alat_musik()
    {
        $this->db->select('*');
        $this->db->from('musik');
        $this->db->order_by('id_musik', 'desc');
        return $this->db->get()->result();
    }

    public function studio()
    {
        $this->db->select('*');
        $this->db->from('studio');
        $this->db->order_by('id_studio', 'desc');
        return $this->db->get()->result();
    }

    public function detail_musik($id_musik)
    {
        $this->db->select('*');
        $this->db->from('musik');
        $this->db->where('id_musik', $id_musik);
        return $this->db->get()->row();
    }

    public function related_musik($id_musik)
    {
        return $this->db->where(array('id_musik !=' => $id_musik))->limit(4)->get('musik')->result();
    }
}

/* End of file M_home.php */
