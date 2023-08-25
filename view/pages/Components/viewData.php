<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="view/style/index.css">
    <title>Weeding IT</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- import google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display:wght@600;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
</head>
</head>

<body>
    <!-- section invitation -->
    <div class="invitation d-flex align-items-center">
        <div class="container text-center ">
            <h1 class="text-light invitation-title">View Your Invitation</h1>
            <div class="row d-flex justify-content-center">
                <!-- looping data -->
                <?php
                require_once 'Server/config.php';
                $query = "SELECT * FROM brides";
                $result = mysqli_query($conn, $query);
                while ($item = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="cardd col-6 col-lg-3 p-3">

                        <a href="../../view/pages/editPage.php?id=<?php echo $item["id"]; ?>" class="text-decoration-none card-href">
                            <div class="card card-invitation">
                                <div class="card-header">
                                    <?php echo $item["Date"]; ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $item["Name"]; ?>'s Weeding</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#B85B45" fill-opacity="1" d="M0,224L34.3,224C68.6,224,137,224,206,192C274.3,160,343,96,411,85.3C480,75,549,117,617,133.3C685.7,149,754,139,823,133.3C891.4,128,960,128,1029,128C1097.1,128,1166,128,1234,138.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
    </svg>
    <!-- end section invitation -->



</body>

</html>