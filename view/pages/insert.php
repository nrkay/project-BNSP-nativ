<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
require_once '../../Server/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $name = $_POST['Name'];
    $partner = $_POST['Partner'];
    $address = $_POST['Address'];
    $description = $_POST['Description'];

    // Query SQL dengan parameter binding
    $query = "INSERT INTO brides (Name, Partner, Address, Description) VALUES (?, ?, ?, ?)";

    // Persiapan pernyataan
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $partner, $address, $description);

    if ($stmt->execute()) {
        echo "Data berhasil disisipkan.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
};

?>

<body>
    <form action="" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="Name" name="Name" required><br><br>

        <label for="email">Partner:</label>
        <input type="text" id="Partner" name="Partner" required><br><br>

        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address" required><br><br>

        <label for="Address">Description:</label>
        <input type="text" id="Description" name="Description" required><br><br>

        <input type="submit" value="Simpan">
    </form>

</body>

</html>