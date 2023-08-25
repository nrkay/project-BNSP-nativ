<?php
require_once '../../Server/config.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Escape value of $id
    $id = mysqli_real_escape_string($conn, $id);

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
    // Escape values from the form
    $name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $partner = mysqli_real_escape_string($conn, $_POST["Partner"]);
    $address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $date = mysqli_real_escape_string($conn, $_POST["Date"]);
    $description = mysqli_real_escape_string($conn, $_POST["Description"]);

    // Query SQL untuk mengupdate data
    $updateQuery = "UPDATE brides SET Name = '$name', Partner = '$partner', Date = '$date', Address = '$address', Description = '$description' WHERE id = $id";

    if (mysqli_query($conn, $updateQuery)) {
        header('location: ../Pages/admin.php');
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/index.css">
    <title>Weeding IT</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- import google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- section join us -->
    <div class="container join_us">
        <h1 class="text-center my-5">EDIT INVITATION</h1>
        <div class="row">
            <div class="col-lg-6 col-5 bg-danger">
                p
            </div>
            <div class="col-lg-6 col-7 p-5">
                <!-- form input -->
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name :</label>
                        <input type="text" class="form-control" name="Name" value="<?php echo $data["Name"]; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="Partner" class="form-label">Partner :</label>
                        <input type="text" class="form-control" name="Partner" value="<?php echo $data["Partner"]; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date Wedding :</label>
                        <input type="date" class="form-control" name="Date" value="<?php echo $data["Date"]; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="Address" class="form-label">Address :</label>
                        <input type="text" class="form-control" name="Address" value="<?php echo $data["Address"]; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="Description" class="form-label">Description :</label>
                        <textarea class="form-control" rows="3" name="Description"><?php echo $data["description"]; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>