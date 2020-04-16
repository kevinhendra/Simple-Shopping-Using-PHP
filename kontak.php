<?php
	include("koneksi.php");
	session_start();
	// untuk menghilangkan tanda merah salah password dan usernama
	unset($_SESSION['salah']);
	unset($_SESSION['tanda']);
	unset($_SESSION['tanda2']);

	if(isset($_SESSION['login'])){		
	include('header2.php');
	}else{
		include("header1.php");
	}
?>
<html>
	<head></head>
	<body>
		<center>
			<div id="container">
				<label><b><u>Created by:</b></u></label>
				<p>672016005 : Prihantoro Manahan Tobing</p>
				<p>672016010 : Kevin Hendara William</p>
				<p>672016183 : Kevin Alexander Harjanto</p>
			</div>
		</center>
	</body>
</html>