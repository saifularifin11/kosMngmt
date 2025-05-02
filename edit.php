<?php

// Array ( [menu] => modify [data] => gedung [id] => RK-3 )
if($_GET['data']=='gedung'){
	
	require("./lib/class.gedung.inc.php");
	$gd = new gedung();
	
	$tbl = 'gedung';
	$key = isset($_GET['id']) ? $_GET['id'] : null;
	$gedung = $gd->pickup('*',$tbl,'kodeGedung',array($key));
	
	include("./forms/gedung.php");	
}

if($_GET['data']=='kamar'){
	
	require("./lib/class.kamar.inc.php");
	$km = new kamar();
	
	$tbl = 'kamar';
	$key = isset($_GET['id']) ? $_GET['id'] : null;
	$kamar = $km->pickup('*',$tbl,'kodeKamar',array($key));
	include("./forms/kamar.php");
}

if($_GET['data']=='tarif'){
	
	require("./lib/class.tarif.inc.php");
	$trf = new tarif();
	
	$tbl = 'kelasTarif';
	$key = isset($_GET['id']) ? $_GET['id'] : null;
	$tarif = $trf->pickup('*',$tbl,'id',array($key));
	include("./forms/kelasTarif.php");
}

if($_GET['data']=='penghuni'){
	
	require("./lib/class.penghuni.inc.php");
	$kos = new penghuni();
	
	$tbl = 'penghuni';
	$key = isset($_GET['id']) ? $_GET['id'] : null;
	$tamu = $kos->pickup('*',$tbl,'nomorKTP',array($key));
	include("./forms/penghuni.php");
}

if($_GET['data']=='kontrak'){
	require("./lib/class.kontrak.inc.php");
	$ktr = new kontrak();

	$tbl = 'kontrak';
	$key = $_GET['id'] ?? null;
	$kontrak = $ktr->pickup('*', $tbl, 'idKontrak', array($key));

	include("./forms/kontrak.php");
}

if($_GET['data']=='bayar'){
	
	require("./lib/class.bayar.inc.php");
	$byr = new payment();
	$tbl = 'payment';
	$key = $_GET['id'];
	$byr->pickup('*',$tbl,'idPayment',array($key));
	include("./forms/bayar.php");
}

?>
