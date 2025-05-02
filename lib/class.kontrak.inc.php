<?php
require("class.crud.inc.php");
class kontrak extends dbcrud
{
	function listKontrak($limit=0)
	{
		$sql = "SELECT * FROM viewKontrak ORDER BY tgKontrak LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		$dataAda = false; // Inisialisasi sebelum loop
		while($r = $qry->fetch()){
			$dataAda = true; // Inisialisasi sebelum loop
			echo "
			<tr>
			   <td><a href='data-kontrak.php?id=".$r['idKontrak']."'>".$r['idKontrak']."</a></td>
			   <td>".$this->tanggalTerbaca($r['tgKontrak'])."</td>
			   <td>".$r['namaPenghuni']."<br/>[ ".$r['nomorKTP']." ]</td>
			   <td>".$r['namaGedung']."</td>
			   <td>".$r['nomorKamar']."</td>
			   <td>".$this->tanggalTerbaca($r['periodTill'])."</td>
			</tr>
			";
		}
		if (!$dataAda) {
			echo "<tr><td colspan='5' class='text-center text-muted'>Data kontrak belum tersedia.</td></tr>";
		}
	}
}
?>
 