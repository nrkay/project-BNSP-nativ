<?php
require_once '../Models/brides.php';

// fetch data dari database
$row = mysqli_fetch_assoc($result);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
}

var_dump($id);

// echo "<table>";
// echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th></tr>";

// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<tr>";
//     echo "<td>" . $row["id"] . "</td>";
//     echo "<td>" . $row["Name"] . "</td>";
//     echo "<td>" . $row["Address"] . "</td>";
//     echo "</tr>";
// }
