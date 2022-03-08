<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'alat_musik' => $this->m_home->alat_musik(),
            'studio' => $this->m_home->studio(),
            'isi' => 'v_home'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
    public function detail_musik($id_musik)
    {
        $data = array(
            'title' => 'Detail Boking',
            'musik' => $this->m_home->detail_musik($id_musik),
            'related_musik' => $this->m_home->related_musik($id_musik),
            'isi' => 'layout/frontend/detail/v_detail'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
}
