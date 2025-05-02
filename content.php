<?php
$menu = $_GET['menu'] ?? 'gedung'; // default: gedung jika menu tidak dikirim
?>

<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">
        <?php judulin($menu); ?>
      </h5>
    </div>
    <div class="card-body">
      <?php
        switch($menu){
          case 'gedung'   : include ('list-gedung.php'); break;
          case 'kamar'    : include ('list-kamar.php'); break;
          case 'tarif'    : include ('list-tarif.php'); break;
          case 'penghuni' : include ('list-penghuni.php'); break;
          case 'kontrak'  : include ('list-kontrak.php'); break;
          case 'bayar'    : include ('list-bayar.php'); break;
          case 'modify'   : include ('edit.php'); break;
          case 'form'     : include ('edit.php'); break;
          case 'klkmr'    : include ('forms/kamarFit.php'); break;
          case 'prKtrx'   : include ('data-kontrak.php'); break;
          default: echo "<p>Halaman tidak ditemukan.</p>"; break;
        }
      ?>
    </div>
  </div>
</div>

<?php
function judulin($list){
  switch($list){
    case 'gedung': echo "DAFTAR GEDUNG"; break;
    case 'kamar': echo "DAFTAR KAMAR"; break;
    case 'tarif': echo "DAFTAR TARIF"; break;
    case 'penghuni': echo "DAFTAR PENGHUNI KAMAR"; break;
    case 'kontrak': echo "DAFTAR KONTRAK HUNIAN"; break;
    case 'bayar': echo "DAFTAR PEMBAYARAN SEWA"; break;
    default: echo "DATA"; break;
  }
}
?>
