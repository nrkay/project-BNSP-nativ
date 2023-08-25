<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weeding_te";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die("Koneksi gagal!" . mysqli_connect_error());
}
