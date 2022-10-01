<h1><?php echo $judul_halaman ?></h1>
<?php echo view_cell("\App\Libraries\Lib_halaman::info", ['kategori' => 'Informasi', 'penulis' => 'Deva']) ?>
<div><?php echo $isi_halaman ?></div>
<div>
     <ul>
          <?php
          foreach ($tujuan3m as $k => $v) {
               echo "<li>$v</li>";
          }
          ?>
     </ul>
</div>