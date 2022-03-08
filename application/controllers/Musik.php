<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Musik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_musik');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Data Paket',
            'alat_musik' => $this->m_musik->musik(),
            'isi' => 'layout/backend/musik/v_musik',
        );
        $this->load->view('layout/backend/v_wrapper.php', $data, FALSE);
    }


    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules('nama_alat', 'Nama Alat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('harga', 'Harga Alat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('tipe', 'Tipe Alat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi musik', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah Paket',
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/backend/musik/v_add',
                );
                $this->load->view('layout/backend/v_wrapper.php', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama_alat' => $this->input->post('nama_alat'),
                    'harga' => $this->input->post('harga'),
                    'tipe' => $this->input->post('tipe'),
                    'promo' => $this->input->post('promo'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_musik->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
                redirect('musik');
            }
        }

        $data = array(
            'title' => 'Tambah Paket',
            'isi' => 'layout/backend/musik/v_add',
        );
        $this->load->view('layout/backend/v_wrapper.php', $data, FALSE);
    }

    //Edit one item
    public function edit($id_musik = NULL)
    {
        $this->form_validation->set_rules('nama_alat', 'Nama Alat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('harga', 'Harga Alat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('tipe', 'Tipe Alat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi musik', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit musik',
                    'musik' => $this->m_musik->detail($id_musik),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/backend/musik/v_edit'
                );
                $this->load->view('layout/backend/v_wrapper', $data, FALSE);
            } else {
                //hapus gambar di folder
                $musik = $this->m_musik->detail($id_musik);
                if ($musik->gambar !== "") {
                    unlink('./assets/gambar/' . $musik->gambar);
                }
                //end
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_musik' => $id_musik,
                    'nama_alat' => $this->input->post('nama_alat'),
                    'harga' => $this->input->post('harga'),
                    'tipe' => $this->input->post('tipe'),
                    'promo' => $this->input->post('promo'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_musik->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('musik');
            } //tanpa ganti gambar
            $data = array(
                'id_musik' => $id_musik,
                'nama_alat' => $this->input->post('nama_alat'),
                'harga' => $this->input->post('harga'),
                'promo' => $this->input->post('promo'),
                'tipe' => $this->input->post('tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_musik->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
            redirect('musik');
        }

        $data = array(
            'title' => 'Edit Musik',
            'musik' => $this->m_musik->detail($id_musik),
            'isi' => 'layout/backend/musik/v_edit'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Delete one item
    public function delete($id_musik = NULL)
    {
        //hapus gambar
        $musik = $this->m_musik->detail($id_musik);
        if ($musik->gambar !== "") {
            unlink('./assets/gambar/' . $musik->gambar);
        }

        $data = array(
            'id_musik' => $id_musik
        );
        $this->m_musik->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('musik');
    }
}

/* End of file musik.php */
