<?php
	/* ===== www.dedykuncoro.com ===== */
	$server		= "mysql-31440-db.mysql-31440:31488"; //sesuaikan dengan nama server
	$user		= "dispepsia"; //sesuaikan username
	$password	= "dispepsia"; //sesuaikan password
	$database	= "kuncoro_login"; //sesuaikan target databese
	
	$connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
	mysql_select_db($database) or die ("Database belum siap!");

	/* ====== UNTUK MENGGUNAKAN MYSQLI DI UNREMARK YANG INI, YANG MYSQL_CONNECT DI REMARK ======= */
	// $con = mysqli_connect($server, $user, $password, $database);
	// if (mysqli_connect_errno()) {
	// 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	// }

?>