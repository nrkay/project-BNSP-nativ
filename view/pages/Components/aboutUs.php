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


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display:wght@600;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- section about us -->
    <div class="about_us" style="background-color: #B85B45;">
        <div class="">

            <div class="aboutUs container" style="padding-bottom: 100px;">
                <h3 class="">Let's Talk About Us</h3>
                <div class="mt-4">
                    <div class="row">
                        <?php
                        require_once 'Server/config.php';
                        $query = "SELECT * FROM profil_company";
                        $result = mysqli_query($conn, $query);
                        while ($item = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col-6">
                                <div class="row">
                                    <div class="profit-company col-8">
                                        <h1><?php echo $item["profit"] ?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="profit-company col-6">
                                <p><?php echo $item["information"] ?></p>
                                <a href="view/pages/galery.php" class="text-decoration-none px-4 py-2 btn-galery rounded">See Our Galery</a>
                            </div>

                    </div>
                </div>
            <?php } ?>
            </div>



            <!-- menampilkan 3 gambar terbaru -->
            <div class="bg-light">
                <div class="text-center">
                    <div class="d-flex flex-row justify-content-center mt-5 mx-5" style="  transform: translateY(-80px);">
                        <?php $Queryimage = "SELECT * FROM image ORDER BY filename DESC LIMIT 4";
                        $images = mysqli_query($conn, $Queryimage);
                        while ($data = mysqli_fetch_assoc($images)) {
                        ?>
                            <div class="card-img-galery m-3 rounded">
                                <div class="">
                                    <img class="" src="view/dashboard/admin/images/assets/<?php echo $data['filename']; ?>" alt="" style="height: 350px; width: 250px; object-fit: cover;">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,288L48,245.3C96,203,192,117,288,74.7C384,32,480,32,576,48C672,64,768,96,864,96C960,96,1056,64,1152,64C1248,64,1344,96,1392,112L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>
    <!-- end section about us -->


</body>

</html>