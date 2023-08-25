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



    <!-- Javascript -->
    <script>
        // Fungsi untuk menangani perilaku scroll halus
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }

        // Tautan About Us
        const aboutUsLink = document.querySelector('a[href="#aboutUs"]');
        if (aboutUsLink) {
            aboutUsLink.addEventListener('click', function(event) {
                event.preventDefault(); // Menghentikan perilaku default link
                scrollToSection('aboutUs'); // Memanggil fungsi scroll
            });
        }

        // Tautan Service
        const serviceLink = document.querySelector('a[href="#service"]');
        if (serviceLink) {
            serviceLink.addEventListener('click', function(event) {
                event.preventDefault();
                scrollToSection('service');
            });
        }

        // Tautan Partner
        const partnerLink = document.querySelector('a[href="#partner"]');
        if (partnerLink) {
            partnerLink.addEventListener('click', function(event) {
                event.preventDefault();
                scrollToSection('partner');
            });
        }

        // Tautan Contact Us
        const contactUsLink = document.querySelector('a[href="#contactUs"]');
        if (contactUsLink) {
            contactUsLink.addEventListener('click', function(event) {
                event.preventDefault();
                scrollToSection('contactUs');
            });
        }
    </script>


</head>

<body>

    <!-- section nav -->
    <nav class="navbar navbar-expand-lg text-light">
        <div class="container login">
            <a class="button-login text-decoration-none bg-light px-3 py-2 rounded" href="../../view/dashboard/admin/" style="color: #B85B45">
                Login Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#service" style=" color: wheat;  font-family: Playfair Display, serif;">Service</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#aboutUs" style=" color: wheat;  font-family: Playfair Display, serif;">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#partner" style=" color: wheat;  font-family: Playfair Display, serif;">Partner</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#contactUs" style=" color: wheat;  font-family: Playfair Display, serif;">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- end nav -->

    <!-- section banner -->
    <div class="banner">
        <?php include('view/pages/Components/banner.php'); ?>

    </div>
    <!-- end section banner -->

    <!-- section ourService -->
    <div class="service" id="service">
        <?php include('view/pages/Components/ourService.php'); ?>

    </div>
    <!-- end section ourService -->

    <!-- section join us -->
    <div class="aboutUs" id="aboutUs">
        <?php include('view/pages/Components/aboutUs.php'); ?>

    </div>
    <!-- end join us -->

    <!-- section invitation -->
    <div class="viewData" id="partner">
        <?php include('view/pages/Components/viewData.php'); ?>

    </div>
    <!-- end section invitation -->

    <!-- section invitation -->
    <div class="contactUs" id="contactUs">
        <?php include('view/pages/Components/contactUs.php'); ?>

    </div>
    <!-- end section invitation -->



</body>

</html>