<?php
include('../koneksi.php');
$id	= $_GET['id'];
$sql 	= 'delete from pesan where id="'.$id.'"';
$query	= mysqli_query($conn,$sql);
header('location: ../pesan');
?>