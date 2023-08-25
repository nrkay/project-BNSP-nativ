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
    <?php
    require_once '../../Server/config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan data dari form
        $name = $_POST['Name'];
        $partner = $_POST['Partner'];
        $address = $_POST['Address'];
        $date = $_POST['Date'];
        $description = $_POST['Description'];

        // Query SQL dengan parameter binding
        $query = "INSERT INTO brides (Name, Partner, Address, Date, Description) VALUES (?, ?, ?, ?, ?)";

        // Persiapan pernyataan
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $name, $partner, $address, $date, $description);

        if ($stmt->execute()) {
            echo "Data berhasil disisipkan.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    };
    ?>
    <!-- section join us -->
    <div class="container table-admin">
        <h1 class="text-center my-5">INVITATION LIST</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Partner</th>
                    <th scope="col">Date</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../Server/config.php';
                $query = "SELECT * FROM brides";
                $result = mysqli_query($conn, $query);
                while ($item = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td> <?php echo $item["Name"]; ?></td>
                        <td> <?php echo $item["Partner"]; ?></td>
                        <td> <?php echo $item["Date"]; ?></td>
                        <td> <?php echo $item["Address"]; ?></td>
                        <td class="flex">
                            <a href="../Logic/delete.php?id=<?php echo $item["id"]; ?>" onclick="return confirm('delete Data?');">
                                <button type="button" class="btn btn-danger">Danger</button>
                            </a>
                            <a href="../Pages/adminEdit.php?id=<?php echo $item["id"]; ?>">
                                <button type="button" class="btn btn-warning">Warning</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- end join us -->

</body>

</html>