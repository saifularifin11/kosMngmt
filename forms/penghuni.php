<?php
if(!isset($_GET['id'])){
  $act = 'act-penghuni.php?mod=ins';
  $val = "Simpan";
  $ktp = '';
  $nma = '';
  $sex = '';
  $asl = '';
  $nhp = '';
} else {
  $act = 'act-penghuni.php?mod=upd';
  $val = "Update";
  $ktp = $tamu['nomorKTP'];
  $nma = $tamu['namaPenghuni'];
  $sex = $tamu['jenisKelamin'];
  $asl = $tamu['alamatAsal'];
  $nhp = $tamu['nomorHP'];
}

// Fungsi helper untuk selected option
function isSelected($val, $current){
  return ($val == $current) ? 'selected' : '';
}
?>

<form action='<?= $act ?>' method='POST' class='form-horizontal'>
  <!-- nomor ktp -->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor KTP</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='nomorKtp' value='<?= htmlspecialchars($ktp) ?>' />
    </div>
  </div>

  <!-- nama penghuni -->
  <div class='form-group'>
    <label class='col-sm-3'>Nama Penghuni</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='namaPenghuni' value='<?= htmlspecialchars($nma) ?>' />
    </div>
  </div>

  <!-- jenis kelamin -->
  <div class='form-group'>
    <label class='col-sm-3'>Jenis Kelamin</label>
    <div class='col-sm-9'>
      <select class='form-control' name='kelamin'>
        <option <?= isSelected('Pria', $sex) ?> value='Pria'>Pria</option>
        <option <?= isSelected('Wanita', $sex) ?> value='Wanita'>Wanita</option>
      </select>
    </div>
  </div>

  <!-- alamat asal -->
  <div class='form-group'>
    <label class='col-sm-3'>Alamat Asal</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='alamatAsal' value='<?= htmlspecialchars($asl) ?>' />
    </div>
  </div>

  <!-- nomor hp -->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor HP</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='nomorHP' value='<?= htmlspecialchars($nhp) ?>' />
    </div>
  </div>

<?php if(!isset($_GET['id'])): ?>
  <!-- kode kamar -->
  <div class='form-group'>
    <label class='col-sm-3'>Kode Kamar</label>
    <div class='col-sm-9'>
    <select class='form-control' name='kdKamar' id='kdKamar' required onchange='updateTarif(this)'>
  <option value=''>-- Pilih Kamar --</option>
  <?php
    require('./lib/class.kamar.inc.php');
    $kamar = new kamar();
    $sql = "SELECT kodeKamar, namaGedung, nomorKamar, tarif FROM viewKamar ORDER BY namaGedung, nomorKamar";
    $qry = $kamar->transact($sql);
    while ($row = $qry->fetch()) {
      $label = $row['namaGedung'] . ' - Kamar ' . $row['nomorKamar'];
      echo "<option value='{$row['kodeKamar']}' data-tarif='{$row['tarif']}'>{$label}</option>";
    }
  ?>
</select>

    </div>
  </div>

  <!-- mulai kontrak -->
  <div class='form-group'>
    <label class='col-sm-3'>Mulai Kontrak</label>
    <div class='col-sm-9'>
      <input type='date' class='form-control' name='kontrakMulai' />
    </div>
  </div>

  <!-- habis kontrak -->
  <div class='form-group'>
    <label class='col-sm-3'>Habis Kontrak</label>
    <div class='col-sm-9'>
      <input type='date' class='form-control' name='kontrakHabis' />
    </div>
  </div>

  <!-- tarif -->
  <div class='form-group'>
    <label class='col-sm-3'>Tarif</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='klKamar' id='tarif' />
    </div>
  </div>
<?php endif; ?>

  <!-- submit -->
  <div class='form-group'>
    <label class='col-sm-3'>&nbsp;</label>
    <div class='col-sm-9'>
      <input type='submit' class='btn btn-primary' value='<?= $val ?>' />
      <input type='reset'  class='btn btn-secondary' value='Reset' />
    </div>
  </div>
</form>

<!-- AJAX kamar -->
<script>
$('document').ready(function(){
  $('#kdKamar').keyup(function(){
    var kk = $('#kdKamar').val();
    $.ajax({
      url: './ajax/seekKamar.php?kk=' + kk,
      success: function(kamar){
        $('#kamar-sugest').html(kamar);
      }
    });
  });
});

function putValue(kamar, tarif){
  $('#kdKamar').val(kamar);
  $('#tarif').val(tarif);
  $('#kamar-sugest').html('');
}
</script>
