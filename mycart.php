<?php
	include('koneksi.php');
	session_start();
	include('header2.php');
	
	
	
	if (isset($_GET["hapus"])) {
		$hapus = $_GET["hapus"];

		array_splice($_SESSION["data"], $hapus, 1);
		header('location: mycart.php');
	}
	
?>
<html>
<head>
	<link rel="stylesheet" href="CSS/css.css">
</head>
<body>
	<?php	
		$tanda = 0;
		if(isset($_SESSION['tanda'])){
			$tanda = 1;
		}
	
		if(isset($_GET['id'])){
			if(!isset($_SESSION["data"])){
				$_SESSION["data"] = array();
			} 
			$id = $_GET['id'];
			$jumlah = $_GET['jumlah'];
			$query = "SELECT * FROM products WHERE id = $id";
			$hasil = mysqli_query($conn, $query);
			$harga = 0;
			$diskon = 0;
			$harga2 = 0;
			$gambar = "";
			$nama_barang = "";
			if($tanda == 0){
				while($row = mysqli_fetch_array($hasil))
				{
					$gambar = $row['gambar'];
					$harga = $row['harga'];
					$diskon = $row['diskon'];
					if($diskon != 0){
						$harga2 = (($harga*$diskon)/100) * $jumlah;
					}else{
						$harga2 = $harga * $jumlah;
					}
					$harga2 = $harga * $jumlah;
					$nama_barang = $row['nama_barang'];
					
					$barang["gambar"] = $gambar;
					$barang["nama_barang"] = $nama_barang;
					$barang["harga"] = $harga;
					$barang["diskon"] = $row['diskon'];
					$barang["jumlah_beli"] = $jumlah;
					$barang["total"] = $harga2;
					array_push($_SESSION["data"], $barang);
				}
				$_SESSION['tanda'] = $tanda;
			}
			
		}
	
	if(isset($_SESSION['data']) && $_SESSION['data']!=null){
	?>
	
			<table id="tablec" border="2">
				<thead>
					<tr>
						<th align="left">No.</th>
						<th align="center">Barang</th>
						<th align="center">Jumlah Beli</th>
						<th align="center">Total</th>
						<th> &nbsp; </th>
					</tr>
				
				</thead>
				<tbody>
				<?php
				$no = 0;
				$total_bayar = 0;
					foreach($_SESSION['data'] as $data){
						$total_bayar += $data['total'];
						//KALO ADA DISKON..;
							$potongan = ($data['harga']*$data['diskon'])/100;
							$real_price = $data['harga']-$potongan;
							$fo_num2 = number_format($real_price,0,",",".");
						$no++;
						if($data['diskon'] != 0){
							$fo_num3 = number_format($data['total'],0,",",".");
							$fo_num5 = number_format($data['harga'],0,",",".");
						echo "
							<tr>
								<td valign='top' align='left'>$no" .".</td>
								<td><img class='img' src='img/" . $data['gambar'] . "' style='float: left'/><b>" . $data['nama_barang'] . 
								"</b><br />
								<b><del>Rp.". $fo_num5 ."</del></b>
								<br />
								<b><span style='color:red'>Rp." .  $fo_num2 . "</span></b>
								</td>
								<td align='center' valign='top'><b>" . $data['jumlah_beli'] . "</b></td>
								<td align='center' valign='top'><b>Rp." . $fo_num3 . "</b></td>
								<td align='center' valign='top'><button onclick=window.location=\"mycart.php?hapus=" . ($no-1) . "\">Hapus</button></td>
							</tr>
						";							
						}else{
							$fo_num3 = number_format($data['total'],0,",",".");
						echo "
							<tr>
								<td valign='top' align='left'>$no" .".</td>
								<td><img class='img' src='img/" . $data['gambar'] . "' style='float: left'/><b>" . $data['nama_barang'] . "</b><br />
								<b><span style='color:red'>Rp." .  $fo_num2 . "</span></b>
								</td>
								<td align='center' valign='top'><b>" . $data['jumlah_beli'] . "</b></td>
								<td align='center' valign='top'><b>Rp." . $fo_num3 . "</b></td>
								<td align='center' valign='top'><button onclick=window.location=\"mycart.php?hapus=" . ($no-1) . "\">Hapus</button></td>
							</tr>
						";		
						}
					}
				
				?>
				</tbody>
				
				<tfoot>
					<tr>
					<?php $fo_num4 = number_format($total_bayar,0,",","."); ?>
						<td colspan="3" align="left"><b>Total</b></td>
						<td colspan="2" align="left"><b>Rp.<?php echo $fo_num4; ?></b></td>
					</tr>
				</tfoot>
			
			</table>
		<?php
	
	}
	else
	{
		?>
			<h4 align="center">Tidak ada Data</h4>
		<?php
	}
	
?>
</body>
</html>