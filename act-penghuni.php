<?php
require_once('./lib/class.penghuni.inc.php');

$tamu = new penghuni();

// Ambil dan sanitasi input
$nomorKtp     = $_POST['nomorKtp'] ?? '';
$namaPenghuni = $_POST['namaPenghuni'] ?? '';
$kelamin      = $_POST['kelamin'] ?? '';
$alamatAsal   = $_POST['alamatAsal'] ?? '';
$nomorHP      = $_POST['nomorHP'] ?? '';
$kdKamar      = $_POST['kdKamar'] ?? '';
$kontrakMulai = $_POST['kontrakMulai'] ?? '';
$kontrakHabis = $_POST['kontrakHabis'] ?? '';
$tarif        = $_POST['klKamar'] ?? '';

// Validasi dasar (bisa dikembangkan)
if (empty($nomorKtp) || empty($namaPenghuni) || empty($kdKamar)) {
    echo "<script>alert('Data wajib diisi.'); window.history.back();</script>";
    exit;
}

// Masukkan data penghuni
$penghuniFields = 'nomorKTP,namaPenghuni,jenisKelamin,alamatAsal,nomorHP';
$penghuniValues = [$nomorKtp, $namaPenghuni, $kelamin, $alamatAsal, $nomorHP];
$tamu->insert('penghuni', $penghuniFields, $penghuniValues);

// Masukkan data kontrak
$kontrakFields = 'tgKontrak,nomorKTP,kodeKamar,periodFrom,periodTill,tarif';
$kontrakValues = [date('Y-m-d'), $nomorKtp, $kdKamar, $kontrakMulai, $kontrakHabis, $tarif];
$tamu->insert('kontrak', $kontrakFields, $kontrakValues);

// Update okupansi kamar
$tamu->occupdate($kdKamar);

// Redirect
echo "<script>window.location='./?menu=penghuni';</script>";
