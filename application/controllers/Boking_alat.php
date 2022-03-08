<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Boking_alat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}
		$data = array(
			'title' => 'Home',
			'isi' => 'layout/frontend/cart/v_belanja'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function add()
	{

		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('qty'),
			'price'   => $this->input->post('price'),
			'name'    => $this->input->post('name'),
		);

		$this->cart->insert($data);
		redirect('boking_alat');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('boking_alat');
	}

	public function clear()
	{
		$this->cart->destroy();
		redirect('boking_alat');
	}

	public function cekout()
	{
		//proteksi halaman
		$this->pelanggan_login->proteksi_halaman();

		// $this->form_validation->set_rules('tanggal_jadwal', 'Tanggal Jadwal', 'required|is_unique[booking.tanggal_jadwal]', array(
		// 	'required' => '%sMohon Untuk Disiis !!!',
		// 	'is_unique' => '%s Sudah ada yang boking !!!'
		// ));
		$this->form_validation->set_rules('tanggal_jadwal', 'Tanggal Jadwal', 'required', array(
			'required' => '%sMohon Untuk Disiis !!!'
			// 'is_unique' => '%s Sudah ada yang boking !!!'
		));

		$this->form_validation->set_rules('jam', 'Jam Boking', 'required|is_unique[booking.jam]', array(
			'required' => '%s Mohon Untuk Disii',
			'is_unique' => '%s Sudah ada yang boking !!!'
		));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Langsung Boking',
				'isi' => 'layout/frontend/cart/v_cekout'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$tgl1 = date('Y-m-d');
			$tgl2 = date('Y-m-d', strtotime('+ 2 days', strtotime($tgl1)));
			$tgl = $this->input->post('tanggal_jadwal');
			if ($tgl <= $tgl2) {
				$this->session->set_flashdata('pesan', 'Pesanan Kurang dari 2 hari');
				redirect('boking_alat/cekout');
			} else {
				//simpan ke tabel transaksi
				$data = array(
					'id_pelanggan' => $this->session->userdata('id_pelanggan'),
					'no_telpon' => $this->session->userdata('no_telpon'),
					'id_boking' => $this->input->post('id_boking'),
					'no_boking' => $this->input->post('no_boking'),
					'tgl_boking' => date('Y-m-d'),
					'tanggal_jadwal' => $this->input->post('tanggal_jadwal'),
					'jam' => $this->input->post('jam'),
					'harga_bayar' => $this->input->post('harga_bayar'),
					'status_bayar' => '0',
					'status_boking' => '0',
				);
				$this->m_transaksi->simpan_transaksi($data);

				//simpan ke tabel rinci transaksi
				$i = 1;
				foreach ($this->cart->contents() as $item) {
					$data_rinci = array(
						'no_boking' => $this->input->post('no_boking'),
						'id_musik' => $item['id'],
					);

					$this->m_transaksi->simpan_rinci_transaksi($data_rinci);
				}
				$this->session->set_flashdata('pesan', 'Pesanan Berhasil Diproses');
				$this->cart->destroy();
				redirect('boking_alat');
			}
		}
	}
}

/* End of file Boking_alat.php */
