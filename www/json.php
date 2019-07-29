<?php
include "config.php";
$data=array();
$q=mysqli_query($mysqli,"select * from `barang`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
