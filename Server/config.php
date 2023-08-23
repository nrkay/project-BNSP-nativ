<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weeding_te";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal!" . mysqli_connect_error());
}

// $query = "SELECT * FROM brides";
// $result = mysqli_query($conn, $query);
// echo "<table>";
// echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th></tr>";

// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<tr>";
//     echo "<td>" . $row["id"] . "</td>";
//     echo "<td>" . $row["Name"] . "</td>";
//     echo "<td>" . $row["Address"] . "</td>";
//     echo "</tr>";
// }

// echo "</table>";
