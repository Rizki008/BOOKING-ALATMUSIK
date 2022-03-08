<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_studio extends CI_Model
{
    // List all your items
    public function studio()
    {
        $this->db->select('*');
        $this->db->from('studio');
        $this->db->order_by('id_studio', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('studio');
        $this->db->where('id_studio', $id_produk);
        return $this->db->get()->row();
    }

    // Add a new item
    public function add($data)
    {
        $this->db->insert('studio', $data);
    }

    //Update one item
    public function edit($data)
    {
        $this->db->where('id_studio', $data['id_studio']);
        $this->db->update('studio', $data);
    }

    //Delete one item
    public function delete($data)
    {
        $this->db->where('id_studio', $data['id_studio']);
        $this->db->delete('studio');
    }
}

/* End of file M_studio.php */
