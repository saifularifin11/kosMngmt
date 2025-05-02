<?php
require("./lib/class.kamar.inc.php");
$kmr = new kamar();
?>

<!-- Tombol Tambah -->
<div class="mb-3">
  <?php $kmr->addBtn('kamar', 'Kamar'); ?>
</div>

<!-- Tabel Data Kamar -->
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th width="150">KODE KAMAR</th>
        <th width="200">GEDUNG &amp; NO. KAMAR</th>
        <th>KAPASITAS</th>
        <th>KELAS</th>
        <th>TARIF</th>
        <th>OPERASI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($_GET['id'])) {
        $kmr->kamarGedung($_GET['id']);
      } elseif (isset($_GET['km'])) {
        $kmr->kamarKelas($_GET['km']);
      } else {
        $kmr->listKamar(0);
      }
      ?>
    </tbody>
  </table>
</div>
