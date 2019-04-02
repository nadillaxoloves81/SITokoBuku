<?php  
require '../_config/config.php';

$kode_buku = $_GET["kode_buku"];
$query = pg_query("DELETE FROM buku WHERE kode_buku = '$kode_buku'");
if($query) {
	echo "
		<script>
			alert('Data berhasil dihapus!')
			document.location.href = 'index.php';	
		</script>
	";
} else {
	echo "
		<script>
			alert('Data gagal dihapus!')
			
		</script>
	";

}

?>