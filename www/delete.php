<?php
 include "db.php";
 if(isset($_GET['id_penjual']))
 {
 $id_penjual=$_GET['id_penjual'];
 $q=mysqli_query($con,"delete from `penjual` where `id_penjual`='$id_penjual'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
