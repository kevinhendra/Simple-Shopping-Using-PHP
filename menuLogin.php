<?php
	include("koneksi.php");
	session_start();
	include("header1.php");
	if(isset($_SESSION['login']))
	{
		header('location: index.php');
	}
	
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['nama'];
		$password = $_POST['pswd'];
		$query = "SELECT * FROM login";
		$hasil = mysqli_query($conn, $query);
		$tanda = 0;
		while($row = mysqli_fetch_array($hasil))
		{
			if($row['user'] == $username && $row['pass'] == $password)
			{
				$tanda = 1;
			}
		}
		if($tanda == 1)
		{
			$_SESSION['login'] = $username;
			header('location: index.php');
		}else
		{
			$_SESSION['salah'] = $username;
			header('location: menuLogin.php');
		}
	}
	
?>	
<html>
<head>
<link rel="stylesheet" href="CSS/css.css">

</head>
<body>
	<center>
	<div class="masuk">
		<label><b><u>Login User</b></u></label>
		<br>
		<p id="cek"></p>
		<form action="menuLogin.php" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="userName" name="nama"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="pass" name="pswd"/></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" id="submit" onclick="submit()" name="submit" value="LOGIN"></td>
				</tr>
			</table>
		</form>
	</div>
	</center>
	<?php
	if(isset($_SESSION['salah']))
	{
		?>
		<script src="JS/js.js"></script>
			<?php
	}
?>
</body>
</html>