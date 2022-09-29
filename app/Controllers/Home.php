<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->get_data();

        $this->load->view('v_mhs', $data);
    }
}
