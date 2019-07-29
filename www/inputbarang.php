<html>
<head>
	<title>Input Barang</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$nama_barang = mysqli_real_escape_string($mysqli, $_POST['nama_barang']);
	$kategori = mysqli_real_escape_string($mysqli, $_POST['kategori']);	
	$processor = mysqli_real_escape_string($mysqli, $_POST['processor']);
	$internal = mysqli_real_escape_string($mysqli, $_POST['internal']);
	$ram = mysqli_real_escape_string($mysqli, $_POST['ram']);
	$warna = mysqli_real_escape_string($mysqli, $_POST['warna']);
	$camera = mysqli_real_escape_string($mysqli, $_POST['camera']);
	$display = mysqli_real_escape_string($mysqli, $_POST['display']);
	$battery = mysqli_real_escape_string($mysqli, $_POST['battery']);
	$os = mysqli_real_escape_string($mysqli, $_POST['os']);

	
	$harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
		
		$gbrsatu = $_FILES['foto']['name'];
		$lokasi =$_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, 'fotoproduk/'.$gbrsatu);
		

		$gbrdua = $_FILES['fotodua']['name'];
		$lokasidua =$_FILES['fotodua']['tmp_name'];
		move_uploaded_file($lokasidua, 'fotoproduk/'.$gbrdua);

	$deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
	
		
	// checking empty fields
	if(empty($nama_barang) || empty($harga) ) {
				
		if(empty($nama_barang)) {
			echo "<font color='red'>Nama Barang field is empty.</font><br/>";
		}
		
		if(empty($harga)) {
			echo "<font color='red'>Harga field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO barang(nama_barang,kategori,ram,processor,internal,camera,display,battery,os,warna,harga,gambarsatu,gambardua,deskripsi) VALUES('$nama_barang','$kategori','$ram','$processor','$internal','$camera','$display','$battery','$os','$warna','$harga','$gbrsatu','$gbrdua','$deskripsi')");
		
		//display success message
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='index.php'>View Result</a>";
		//header("location:daftarbarang.php");
		//echo "<meta http-equiv='Refresh' content='1; URL=http://uasalfian0082.000webhostapp.com/daftarbarang.php'>";
	}
}
?>
</body>
</html>
