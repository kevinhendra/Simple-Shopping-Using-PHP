<?php
	$host_name = "localhost";
	$username = "root";
	$password = "";
	$database = "products";

	$conn = mysqli_connect($host_name, $username, $password, $database);

	if (mysqli_connect_error()){
			echo "Koneksi Gagal".mysqli_connect_error();
	}
?>
