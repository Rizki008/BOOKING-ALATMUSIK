<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{
    public function simpan_transaksi($data)
    {
        $this->db->insert('booking', $data);
    }

    public function simpan_rinci_transaksi($data_rinci)
    {
        $this->db->insert('transaksi', $data_rinci);
    }

    public function belum_bayar()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->where('status_boking=0');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function diproses()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->where('status_boking=1');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function dikirim()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->where('status_boking=2');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function selesai()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->where('status_boking=3');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function detail_pesanan($id_boking)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_boking', $id_boking);
        return $this->db->get()->row();
    }

    //detail pesanan selesai
    public function pesanan_detail($no_order)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('transaksi', 'boking.no_order = transaksi.no_order', 'left');
        $this->db->join('tbl_paket', 'transaksi.id_paket = tbl_paket.id_paket', 'left');
        $this->db->where('boking.no_order', $no_order);
        return $this->db->get()->result();
    }

    public function insert_riview()
    {
        $data = array(
            'id_pelanggan' => $this->session->userdata('id_pelanggan'),
            'id_paket' => $this->input->post('id_paket'),
            'nama' => $this->session->userdata('nama'),
            'tanggal' => date('Y-m-d'),
            'isi' => $this->input->post('isi'),
            'rating' => $this->input->post('rating')
        );
        $this->db->insert('tbl_riview', $data);
    }

    public function info($no_order)
    {
        $this->db->select('*');
        $this->db->from('booking');

        $this->db->join('tbl_pelanggan', 'booking.id_pelanggan = tbl_pelanggan.id_pelanggan', 'left');
        $this->db->where('no_order', $no_order);
        return $this->db->get()->result();
    }
    //and pesanan selesai

    public function upload_buktibayar($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('booking', $data);
    }

    public function update_order($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('booking', $data);
    }

    public function produk()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get()->result();
    }

    public function cek($tgl_resepsi)
    {
        $this->db->from('booking');
        $query = $this->db->query('select count(tgl_resepsi) >=3 from boking where tgl_resepsi= ' . $tgl_resepsi . ' group by tgl_resepsi');
        return $query->result();
    }
}
