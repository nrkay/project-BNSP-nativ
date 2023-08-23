<?php
require_once '../../Server/config.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Mengambil data dari database berdasarkan ID
    $query = "SELECT * FROM brides WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data not found.";
        exit;
    }
} else {
    echo "ID not provided.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data yang dikirimkan melalui form
    $name = $_POST["Name"];
    $partner = $_POST["Partner"];
    $address = $_POST["Address"];
    $description = $_POST["Description"];

    // Query SQL untuk mengupdate data
    $updateQuery = "UPDATE brides SET Name = '$name', Partner = '$partner', Address = '$address', Description = '$description' WHERE id = $id";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Data updated successfully.";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Data</h1>
    <form method="POST">
        <label for="Name">Name:</label>
        <input type="text" name="Name" value="<?php echo $data["Name"]; ?>"><br>
        <label for="Partner">Partner:</label>
        <input type="text" name="Partner" value="<?php echo $data["Partner"]; ?>"><br>
        <label for="Address">Address:</label>
        <input type="text" name="Address" value="<?php echo $data["Address"]; ?>"><br>
        <label for="Description">Description:</label>
        <textarea name="Description"><?php echo $data["Description"]; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>