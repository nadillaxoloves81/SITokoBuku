<?php  
	// Setting default timezone
	date_default_timezone_set('Asia/Jakarta');

	session_start();

	$host     ="localhost";
	$user     ="postgres";
	$password ="root";
	$port     ="5432";
	$dbname   ="db_toko_buku";

	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password) or die("Koneksi gagal");

	// Fungsi base url
	function base_url( $url = null ) {
		$base_url = "http://localhost/SITokoBuku";
		if( $url != null ) {
			return $base_url."/".$url;
		} else {
			return $base_url;
		}
	}
?>