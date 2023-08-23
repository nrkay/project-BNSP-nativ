<?php
require_once '../config.php';
$query = "SELECT * FROM brides";
$result = mysqli_query($conn, $query);
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

mysqli_close($conn);
