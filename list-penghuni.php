<?php
require("./lib/class.penghuni.inc.php");
$kos = new penghuni();
?>

<!-- Tombol Tambah Penghuni -->
<?php $kos->addBtn('penghuni', 'Penghuni'); ?>

<!-- Tabel Penghuni -->
<div class="table-responsive mt-3">
  <table class="table table-bordered table-hover table-striped align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th>No. Identitas</th>
        <th>Nama Penghuni</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Asal</th>
        <th>No. HP</th>
      </tr>
    </thead>
    <tbody>
      <?php $kos->listPenghuni(0); ?>
    </tbody>
  </table>
</div>
