<?php
require("./lib/class.kontrak.inc.php");
$ktrx = new kontrak();
?>

<!-- Tombol Tambah Kontrak -->
<?php $ktrx->addBtn('kontrak', 'Kontrak'); ?>

<!-- Tabel Kontrak -->
<div class="table-responsive mt-3">
  <table class="table table-bordered table-striped align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th width="100">No. Kontrak</th>
        <th width="120">Tanggal</th>
        <th>Nama Penghuni</th>
        <th>Gedung</th>
        <th>No. Kamar</th>
        <th>Akhir Kontrak</th>
      </tr>
    </thead>
    <tbody>
      <?php $ktrx->listKontrak(0); ?>
    </tbody>
  </table>
</div>
