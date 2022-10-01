<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        echo "<h1>Halaman siswa dari directory admin</h1>";
    }
    function siswa_detail($kelas, $id_siswa)
    {
        echo "<h1>Halaman Function Siswa Detail Dengan Kelas $kelas dengan id $id_siswa</h1>";
        #return view("Siswa");
        $this->validasi();
    }
    protected function validasi()
    {
        echo "Halaman Fungsi Untuk Validasi";
    }
}
