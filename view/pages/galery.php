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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #FFB7B7;">
        <div class="container">
            <a href="#" onclick="history.back();">
                <img class="mx-5" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/u-turn-to-left.png" alt="u-turn-to-left" style="height: 25px; width: 25px;" /></a>
    </nav>
    </div>


    <div class="container text-center">
        <h1 class="mb-5 mt-3">View Our Gallery</h1>
        <div class="row">
            <?php
            require_once '../../Server/config.php';
            $query = "SELECT * FROM image";
            $result = mysqli_query($conn, $query);
            while ($item = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col">
                    <img class="image-gallery mt-4" src="../../view/dashboard/admin/images/assets/<?php echo $item['filename']; ?>" alt="" style="height: 350px; width: 250px; object-fit: cover; >
                </div>

            <?php } ?>
        </div>
    </div>



</body>

</html>