<?php 
include '../koneksi.php';
$id=$_GET["id"];
$query=mysqli_query($connect,"DELETE FROM buku where id_buku='$id'");
if(isset($query)){
    header("location : index.php");
    exit;
}
else{
    header("location : index.php");
    exit;
}
?>