<?php  
	require '../_config/config.php';

	if(isset($_POST["save"])) {
		$kode_buku = $_POST["kode_buku"];
		$judul     = $_POST["judul"];
		$harga     = $_POST["harga"];
		$penerbit  = $_POST["penerbit"];
		$stock     = $_POST["stock"];

		$query = pg_query("INSERT INTO buku values('$kode_buku', '$judul', '$harga', '$penerbit', '$stock')");

		if($query == true) {
			echo "
				<script>
					alert('Data berhasil ditambahkan!')
					document.location.href='index.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('Data gagal ditambahkan!');
					document.location.href='index.php';
				</script>
			";
		}
		
	} else if(isset($_POST["update"])) {
		$kode = $_POST["kode"];
		$judul     = $_POST["judul"];
		$harga     = $_POST["harga"];
		$penerbit  = $_POST["penerbit"];
		$stock     = $_POST["stock"];

		$query = pg_query("UPDATE buku SET judul = '$judul', harga_satuan = '$harga', id_penerbit = '$penerbit', stok_buku = $stock WHERE kode_buku = '$kode'");

		if($query == true) {
			echo "
				<script>
					alert('Data berhasil diupdate!')
					document.location.href = 'index.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('Data gagal diupdate!');
					
				</script>
			";
		}
	}



?>