<?php
 include "db.php";
 if(isset($_GET['id_makanan']))
 {
 $id_makanan=$_GET['id_makanan'];
 $q=mysqli_query($con,"delete from `makanan` where `id_makanan`='$id_makanan'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
