<?php
include('../../Server/config.php');
$id    = $_GET['id'];
$sql     = 'delete from brides where id="' . $id . '"';
$query    = mysqli_query($conn, $sql);
header('location: ../Pages/admin.php');
