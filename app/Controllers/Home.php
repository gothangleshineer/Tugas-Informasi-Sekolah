<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->get_data();

        $this->load->view('Home', $data);
    }
    function halaman_email()
    {
        $email = \config\Services::email();
        $alamat_email = "cyber8485@gmail.com";
        $email->setTo($alamat_email);
        $alamat_pengirim = "delusionboys074@gmail.com";
        $email->setFrom($alamat_pengirim);
        $subject = "test email";
        $email->setSubject($subject);
        $isi_pesan = "semoga selalu semangat";
        $email->setMessage($isi_pesan);
        if ($email->send()) {
            echo "<h1>Pesan Terkirim</h1>";
        } else {
            echo "<h1>Pesan Gagal Terkirim</h1>";
            $data_error = $email->printDebugger();
            print_r($data_error);
        }
    }
}
