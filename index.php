<?php
	include('koneksi.php');
	session_start();
	unset($_SESSION['salah']);
	unset($_SESSION['tanda']);
	unset($_SESSION['tanda2']);

?>

<html>
	<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/css.css">
<style>

		
</style>
</head>
<body>	
	<?php
	// cek header setelah atau sebelum login ...
		if(isset($_SESSION['login']))
		{
			include("header2.php");
		}else
		{
			include("header1.php");
		}
		
		$query = "SELECT * FROM products ORDER BY kategori desc, nama_barang";
		$hasil = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($hasil))
		{
			?>
			<table class="kotak" onclick="cekLogin(<?php echo $row['id']; ?>);">
				<tr>
					<td colspan="2" height="160px"style="padding: 25px"><img class="img" src="img/<?php echo $row['gambar'];?>" /></td>
				</tr>
				<tr>				
						<td colspan="2" height="100px" valign="top"><b><?php echo $row['nama_barang']; ?></b>
						<br /><br />
						<?php 
						$uang =  $row['harga'];
						$fo_num1 = number_format($uang,0,",",".");
							if($row['diskon'] != 0){
						?>
							<b><del> Rp.<?php echo $fo_num1; ?> </b></del>
						<?php
							}else{
						?>
							<span style="color: red"><b>Rp.<?php echo $fo_num1; ?></b></span>
						<?php
							}
						?>
					
						</td>
					
				</tr>
				<tr>
					<?php
							$potongan = ($row['harga']*$row['diskon'])/100;
							$real_price = $row['harga']-$potongan;
							$fo_num2 = number_format($real_price,0,",",".");
						if($row['diskon'] != 0){
							?>
								<td><div class='bulat' align='center'>DISC <?php echo $row['diskon']; ?>%</div></td>
								<td align="left"><b><span style="color: red">Rp.<?php echo $fo_num2; ?></span></b></td>
							<?php
						}
						
					?>
				</tr>
			</table>
			<?php
		}
	?>
	
	<script>
	function cekLogin(data){
	<?php
		if(!isset($_SESSION['login']))
		{
			?>
				alert("Anda harus Login");
				window.location='index.php';
			<?php
		}
		else
		{
			?>
				var x = prompt("Mau Berapa?", "");
				if(x != "" && x != null && !isNaN(x) && x !=0){	
				window.location="mycart.php?id=" + data + "&jumlah=" + x;
				}
				if(isNaN(x)){
					alert('pastikan angka');
				}
				if(x==0){
					alert('Angka tidak boleh 0');
				}
			<?php
		}
		?>
	}
	</script>
	
	</body>

</html>