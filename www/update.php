<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nama_makanan=$_POST['nama_makanan'];
 $harga=$_POST['harga'];
 $stok=$_POST['stok'];
 $id_penjual=$_POST['id_penjual'];
 $q=mysqli_query($con,"UPDATE `makanan` SET `nama_makanan`='$nama_makanan',`harga`='$harga',`stok`='$stok',`id_penjual`='$id_penjual' where `id_makanan`='$id_makanan'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
