<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_makanan=$_POST['id_makanan'];
 $nama_penjual=$_POST['nama_penjual'];
 $nama_warung=$_POST['nama_warung'];
 $nohp=$_POST['nohp'];
 $id_penjual=$_POST['id_penjual'];
 $q=mysqli_query($con,"UPDATE `penjual` SET `nama_penjual`='$nama_penjual',`nama_warung`='$nama_warung',`nohp`='$nohp',`id_penjual`='$id_penjual' where `id_penjual`='$id_penjual'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
