<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Studio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_studio');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Data studio',
            'alat_studio' => $this->m_studio->studio(),
            'isi' => 'layout/backend/studio/v_studio',
        );
        $this->load->view('layout/backend/v_wrapper.php', $data, FALSE);
    }


    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules('nama_studio', 'Nama studio', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('harga', 'Harga studio', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi studio', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah studio',
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/backend/studio/v_add',
                );
                $this->load->view('layout/backend/v_wrapper.php', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama_studio' => $this->input->post('nama_studio'),
                    'harga' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_studio->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
                redirect('studio');
            }
        }

        $data = array(
            'title' => 'Tambah studio',
            'isi' => 'layout/backend/studio/v_add',
        );
        $this->load->view('layout/backend/v_wrapper.php', $data, FALSE);
    }

    //Edit one item
    public function edit($id_studio = NULL)
    {
        $this->form_validation->set_rules('nama_studio', 'Nama studio', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('harga', 'Harga studio', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi studio', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit studio',
                    'studio' => $this->m_studio->detail($id_studio),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/backend/studio/v_edit'
                );
                $this->load->view('layout/backend/v_wrapper', $data, FALSE);
            } else {
                //hapus gambar di folder
                $studio = $this->m_studio->detail($id_studio);
                if ($studio->gambar !== "") {
                    unlink('./assets/gambar/' . $studio->gambar);
                }
                //end
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_studio' => $id_studio,
                    'nama_studio' => $this->input->post('nama_studio'),
                    'harga' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_studio->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
                redirect('studio');
            } //tanpa ganti gambar
            $data = array(
                'id_studio' => $id_studio,
                'nama_studio' => $this->input->post('nama_studio'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_studio->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
            redirect('studio');
        }

        $data = array(
            'title' => 'Edit studio',
            'studio' => $this->m_studio->detail($id_studio),
            'isi' => 'layout/backend/studio/v_edit'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Delete one item
    public function delete($id_studio = NULL)
    {
        //hapus gambar
        $studio = $this->m_studio->detail($id_studio);
        if ($studio->gambar !== "") {
            unlink('./assets/gambar/' . $studio->gambar);
        }

        $data = array(
            'id_studio' => $id_studio
        );
        $this->m_studio->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('studio');
    }
}

/* End of file studio.php */
