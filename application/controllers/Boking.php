<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Boking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_boking_masuk');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Data Booking',
            'boking_alat' => $this->m_boking_masuk->boking_alat(),
            'pesanan_dikirim' => $this->m_boking_masuk->pesanan_dikirim(),
            'pesanan_selesai' => $this->m_boking_masuk->pesanan_selesai(),
            'isi' => 'layout/backend/boking/v_boking_alat'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    public function transaksi()
    {
        $data = array(
            'title' => 'Data Booking',
            'boking_alat' => $this->m_boking_masuk->boking_alat(),
            'pesanan_diproses' => $this->m_boking_masuk->pesanan_diproses(),
            'isi' => 'layout/backend/transaksi/v_transaksi'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }


    public function proses($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 1
        );
        $this->m_boking_masuk->update_order($data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di proses');
        redirect('boking');
    }

    public function konfirmasi($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'status_boking' => 2
        );
        $this->m_boking_masuk->update_order($data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di proses');
        redirect('boking');
    }

    public function batal($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'catatan' => $this->input->post('catatan'),
            'status_boking' => 4
        );
        $this->m_boking_masuk->update_order($data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Batalkan');
        redirect('boking');
    }

    public function kirim($id_boking)
    {
        $data = array(
            'id_boking' => $id_boking,
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'status_boking' => 2
        );
        $this->m_boking_masuk->update_order($data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di kirim');
        redirect('boking');
    }

    public function detail($no_order)
    {
        $data = array(
            'title' => 'Pesanan',
            'pesanan_detail' => $this->m_transaksi->pesanan_detail($no_order),
            'diproses_pesanan' => $this->m_boking_masuk->diproses_pesanan(),
            'proses_kirim' => $this->m_boking_masuk->proses_kirim(),
            'isi' =>  'layout/backend/transaksi/v_detail'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
}

/* End of file Boking.php */
