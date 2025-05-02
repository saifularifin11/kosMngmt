<?php
require("./lib/class.gedung.inc.php");
$gdg = new gedung();
?>

<!-- Tombol Tambah -->
<div class="mb-3">
  <?php $gdg->addBtn('gedung', 'Gedung', 'btn btn-outline-primary border-2 rounded-pill shadow-sm px-4'); ?>
</div>

<!-- Tabel Data Gedung -->
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th>NAMA GEDUNG</th>
        <th>ALAMAT</th>
        <th>TELP</th>
        <th width="150">JUMLAH KAMAR</th>
        <th width="100">TK. HUNIAN</th>
        <th>OPERASI</th>
      </tr>
    </thead>
    <tbody>
      <?php $gdg->listGedung(0); ?>
    </tbody>
  </table>
</div>

