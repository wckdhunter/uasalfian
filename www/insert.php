<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_makanan=$_POST['nama_makanan'];
 $harga=$_POST['harga'];
 $stok=$_POST['stok'];
 $id_penjual=$_POST['id_penjual'];
 $q=mysqli_query($con,"INSERT INTO `makanan` (`nama_makanan`,`harga`,`stok`,`id_penjual`) VALUES ('$nama_makanan','$harga','$stok','$id_penjual')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
