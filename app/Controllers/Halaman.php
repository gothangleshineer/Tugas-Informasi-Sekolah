<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function index()
    {
        $data['title'] = "Tetap Stay";
        $data['judul_halaman'] = "Tetap Stay Belajar";
        $data['isi_halaman'] = "Semoga Sehat Selalu";
        $data['tujuan3m'] = ['Membaca', 'Memahami', 'Mengajari'];

        echo view('header', $data);
        echo view('konten/halaman', $data);
        echo view('footer');
    }
    public function info()
    {
        return "Ditulis di kategori: <b>Berita</b>, Penulis: <b>Muhammad Nur</b>";
    }
}
