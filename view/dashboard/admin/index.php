<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="asset/css/login.css" rel="stylesheet">

    <script type="text/javascript">
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username != "" && password != "") {
                return true;
            } else {
                alert('Username dan Password harus di isi !');
                return false;
            }
        }
    </script>

</head>

<body class="" style="background-color: #B85B45;">
    <br />
    <br />
    <br />
    <br />
    <div class="container">

        <div class="login">
            <br />

            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
            </div>
            <form action="login.php" method="post" onSubmit="return validasi()">
                <div>
                    <label>Username:</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Login" class="tombol" style="background-color: #B85B45 !important;">
                </div>
            </form>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

</body>

</html>