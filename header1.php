<?php
	include('koneksi.php');
	$status = "Offline";
	
	if(isset($_SESSTION['login']))
	{
		$status = "Online";
	}

?>
<html>
<head>
	<link rel="stylesheet" href="CSS/css.css">
</head>
<style>
</style>
<body>

    <div class="top" style="background-color: white;">
		<img style="float: left;" src="uksw.jpg" height="50px" width="50px">
		<div class="toko"> &nbsp;&nbsp;&nbsp; <b>Toko Online XYZ</b> <span style="float: right"> <?php echo $status; ?> </span></div> 
	</div>
		<div class="row top2" style="background-color: white;">
			<div class="col-6" style="background-color: white;">
				<input type="button" value="Product" id="home_produk" onclick="window.location.assign('index.php')">
				<input type="button" value="Contact Us" id="kontak" onclick="window.location.assign('kontak.php')">
			</div>	
			<div class="col-6" style="background-color: white;">
				<input style="float: right" type="button" value="Login" id="login" onclick="window.location.assign('menuLogin.php')">
			</div>	
		</div>
	</div>	
		<br><br><br><br><br><br>

</body>

</html>