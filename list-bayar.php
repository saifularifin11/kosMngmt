<!-- Input Pencarian Kontrak -->
<div class="mb-3">
  <label for="kontraktor" class="form-label fw-semibold">Cari Nomor Kontrak</label>
  <input type="text" class="form-control" id="kontraktor" placeholder="Nama Penghuni">
</div>

<!-- Hasil AJAX -->
<div id="datakontrak" class="mb-4"></div>

<!-- Daftar Pembayaran -->
<div class="table-responsive" id="list-bayar">
  <table class="table table-bordered table-striped align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>No. Kontrak</th>
        <th>JUMLAH</th>
        <th>MULAI</th>
        <th>HINGGA</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require("./lib/class.bayar.inc.php");
      $byr = new payment();
      $byr->listPayment(0); // Pastikan ini mencetak <tr><td>...</td></tr>
      ?>
    </tbody>
  </table>
</div>

<!-- Script AJAX -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const input = document.getElementById("kontraktor");
  const listBayar = document.getElementById("list-bayar");
  const dataKontrak = document.getElementById("datakontrak");

  input.addEventListener("keyup", function () {
    const nama = input.value.trim();

    if (nama.length === 0) {
      dataKontrak.innerHTML = "";
      listBayar.style.display = "block";
      return;
    }

    listBayar.style.display = "none";

    fetch(`ajax/seekKontrak.php?np=${encodeURIComponent(nama)}`)
      .then(response => response.text())
      .then(html => {
        dataKontrak.innerHTML = html;
      })
      .catch(err => {
        dataKontrak.innerHTML = "<div class='alert alert-danger'>Gagal memuat data kontrak.</div>";
      });
  });
});
</script>
