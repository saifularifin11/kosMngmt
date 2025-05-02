<?php
require("./lib/class.tarif.inc.php");
$trf = new tarif();

if (isset($_GET['mod']) && $_GET['mod'] == 'del' && isset($_GET['id'])) {
  $kode = htmlspecialchars($_GET['id']); // proteksi dasar
  $trf->hapusTarif($kode);
  echo "<script>alert('Data Tarif berhasil dihapus'); window.location='./?menu=tarif';</script>";
  exit;
}

?>

<!-- Tombol Tambah Tarif -->
<?php $trf->addBtn('tarif','Tarif'); ?>

<!-- Tabel Tarif -->
<div class="table-responsive mt-3">
  <table class="table table-bordered table-striped table-hover align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th>Kelas Kamar</th>
        <th>Tarif per Bulan</th>
        <th>Operasi</th>
      </tr>
    </thead>
    <tbody>
      <?php $trf->listTarif(0); ?>
    </tbody>
  </table>
</div>
