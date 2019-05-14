<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_penjual=$_POST['nama_penjual'];
 $nama_warung=$_POST['nama_warung'];
 $nohp=$_POST['nohp'];
 $id_penjual=$_POST['id_penjual'];
 $q=mysqli_query($con,"INSERT INTO `penjual` (`nama_penjual`,`nama_warung`,`nohp`,`id_penjual`) VALUES ('$nama_penjual','$nama_warung','$nohp','$id_penjual')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
