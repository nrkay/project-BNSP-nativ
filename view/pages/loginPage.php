<!DOCTYPE html>
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../../Server/config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
        echo "alert('Username belum diisi');";
        echo "<meta http-equiv='refresh' content='1 url=loginPage.php'>";
    } else if (empty($password)) {
        echo "alert('Password belum diisi');";
        echo "<meta http-equiv='refresh' content='1 url=loginPage.php'>";
    } else {
        session_start();
        $login = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
        if (mysqli_num_rows($login) > 0) {
            $_SESSION['username'] = $username;
            echo "alert('Login Berhasil');";
            header("location:admin.php");
        } else {
            echo "alert('Username dan Password salah');";
            echo "<meta http-equiv='refresh' content='1 url=loginPage.php'>";
        }
    }
}

?>




<body>
    <div class="loginAdmin bg-danger d-flex  align-items-center vh-100">
        <div class="form-login row mx-auto bg-warning">
            <div class="p-5 rounded">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" class="form-control" name="username" required>
                        <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="text" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>