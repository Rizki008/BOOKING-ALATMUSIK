<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_boking_masuk extends CI_Model
{
    // List all your items
    public function boking_alat()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = booking.id_pelanggan', 'left');
        $this->db->where('status_boking=0');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }


    public function pesanan_diproses()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = booking.id_pelanggan', 'left');
        $this->db->where('status_boking=1');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function pesanan_dikirim()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = booking.id_pelanggan', 'left');
        $this->db->where('status_boking=2');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function pesanan_selesai()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = booking.id_pelanggan', 'left');
        $this->db->where('status_boking=3');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function pesanan_dibatalkan()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = booking.id_pelanggan', 'left');
        $this->db->where('status_boking=4');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function update_order($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('booking', $data);
    }

    public function diproses_pesanan()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('tbl_rinci_transaksi', 'booking.no_order = tbl_rinci_transaksi.no_order', 'left');
        $this->db->join('tbl_produk', 'tbl_rinci_transaksi.id_produk = tbl_produk.id_produk', 'left');
        return $this->db->get()->row();
    }

    public function proses_kirim()
    {
        $this->db->select('*');
        $this->db->from('booking');
        return $this->db->get()->result();
    }
}

/* End of file M_boking.php */
