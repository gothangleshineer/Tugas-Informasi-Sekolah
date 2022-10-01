<?php

namespace App\Controllers;

use App\Controllers\admin\Siswa as Adminsiswa;

class Siswa extends BaseController
{
    public function index()
    {
        $Adminsiswa = new Adminsiswa();
        $Adminsiswa->index();
        return view('Siswa');
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
