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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display:wght@600;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- section about us -->
    <div class="about_us">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#B85B45" fill-opacity="1" d="M0,224L34.3,224C68.6,224,137,224,206,192C274.3,160,343,96,411,85.3C480,75,549,117,617,133.3C685.7,149,754,139,823,133.3C891.4,128,960,128,1029,128C1097.1,128,1166,128,1234,138.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
        </svg>
        <div class="our-service text-center">
            <h1 class="mb-3">Our Service</h1>
            <div class="container text-center mt-5 d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <?php
                    require_once '../../Server/config.php';
                    $query = "SELECT * FROM produk";
                    $result = mysqli_query($conn, $query);
                    while ($item = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-6 col-lg-4 p-3">
                            <div class="card" style="width: 13rem;">
                                <div class="invitation-title-card card-body">
                                    <h3> <?php echo $item["name"]; ?></h3>
                                    <p class="card-text">only</p>
                                    <h4>Rp. <?php echo $item["harga"]; ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#B85B45" fill-opacity="1" d="M0,32L34.3,64C68.6,96,137,160,206,192C274.3,224,343,224,411,229.3C480,235,549,245,617,245.3C685.7,245,754,235,823,213.3C891.4,192,960,160,1029,149.3C1097.1,139,1166,149,1234,144C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </div>
    <!-- end section about us -->


</body>

</html>