<?php
require("class.crud.inc.php");
class penghuni extends dbcrud
{
	function listPenghuni($limit=0)
	{
		$sql = "SELECT * FROM penghuni ORDER BY namaPenghuni LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		$dataAda = false; // Inisialisasi sebelum loop
		while($r = $qry->fetch()){
			$dataAda = true; // Inisialisasi sebelum loop
			echo "
			<tr>
			   <td><a href='./?menu=modify&data=penghuni&id=".$r['nomorKTP']."'>".$r['nomorKTP']."</a></td>
			   <td>".$r['namaPenghuni']."</td>
			   <td>".$r['jenisKelamin']."</td>
			   <td>".$r['alamatAsal']."</td>
			   <td>".$r['nomorHP']."</td>
			</tr>
			";
		}
		if (!$dataAda) {
			echo "<tr><td colspan='5' class='text-center text-muted'>Data penghuni belum tersedia.</td></tr>";
		}
	}
	
	function occupdate($kdKamar){
		$sql = "UPDATE kamar SET occupancy = occupancy + 1 
				WHERE kodeKamar = ? LIMIT 1";
		$qry =  $this->transact($sql,array($kdKamar));
		$qry = null;
	}
}
?>
 
