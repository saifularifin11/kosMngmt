<?php
require("class.crud.inc.php");
class payment extends dbcrud
{
	function listPayment($limit=0)
	{
		$sql = "SELECT * FROM payment ORDER BY idPayment LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		$dataAda = false; // Inisialisasi sebelum loop
		while($r = $qry->fetch()){
			echo "
			<tr>
			  <td>".$r['idPayment']."</td>
			  <td>".$r['idKontrak']."</td>
			  <td class='alg-r'>".$this->numfor($r['nominal'])."</td>
			  <td>".$this->tanggalTerbaca($r['paymentPeriodFrom'])."</td>
			  <td>".$this->tanggalTerbaca($r['paymentPeriodTill'])."</td>
			</tr>
			";
		}
		if (!$dataAda) {
			echo "<tr><td colspan='5' class='text-center text-muted'>Data Pembayaran belum tersedia.</td></tr>";
		}
	}
	
	
}
?>
 
