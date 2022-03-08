<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_musik extends CI_Model
{
    // List all your items
    public function musik()
    {
        $this->db->select('*');
        $this->db->from('musik');
        $this->db->order_by('id_musik', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('musik');
        $this->db->where('id_musik', $id_produk);
        return $this->db->get()->row();
    }

    // Add a new item
    public function add($data)
    {
        $this->db->insert('musik', $data);
    }

    //Update one item
    public function edit($data)
    {
        $this->db->where('id_musik', $data['id_musik']);
        $this->db->update('musik', $data);
    }

    //Delete one item
    public function delete($data)
    {
        $this->db->where('id_musik', $data['id_musik']);
        $this->db->delete('musik');
    }
}

/* End of file M_musik.php */
