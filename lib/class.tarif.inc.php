<?php
require("class.crud.inc.php");
class tarif extends dbcrud
{
	function hapusTarif($id) {
		$this->delete('kelastarif', 'id', $id);
	}

	function listTarif($limit=0)
	{
		$sql = "SELECT * FROM kelasTarif ORDER BY namaKelas LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		$dataAda = false; // Inisialisasi sebelum loop
		while($r = $qry->fetch()){
			$dataAda = true;
			echo "
			<tr>
			   <td>".$r['namaKelas']."</td>
			   <td class='alg-r'><span class='currency'>IDR</span> ".$this->numfor($r['tarif'])."</td>
			   <td width='300'>
			     <a href='./?menu=modify&data=tarif&id=".$r['id']."'>Edit</a>
			     <a href='list-tarif.php?mod=del&id=".$r['id']."' onclick=\"return confirm('Yakin ingin menghapus data tarif ini?');\">Hapus</a>
			     <a href='./?menu=kamar&km=".$r['id']."'>Daftar Kamar</a>
			   </td>
			</tr>
			";
		}
		if (!$dataAda) {
			echo "<tr><td colspan='5' class='text-center text-muted'>Data Tarif belum tersedia.</td></tr>";
		}
	}
}
?>
 
