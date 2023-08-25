<?php
error_reporting(0);
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./assets/" . $filename;

	// $db = mysqli_connect("localhost", "root", "", "weeding_it");
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weeding_te";
	$db = new mysqli($servername, $username, $password, $dbname);

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3>  Image uploaded successfully!</h3>";
	} else {
		echo "<h3>  Failed to upload image!</h3>";
	}
}

?>
<html>

<head>
	<title></title>
	<!-- Custom fonts for this template -->
	<link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="../asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
	<div class="container-fluid rounded bg-white p-3">
		<div class="mb-2 ">
			<a class="btn btn-dark" href="index.php">Back<i class="bi bi-arrow-left"></i></a>
		</div>
		<form class="w-75 mt-3" method="POST" action="" enctype="multipart/form-data">

			<div class="mb-3 w-50">
				<label class="form-label">Name : </label>
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>

			<button type="submit" name="Input" class="btn btn-primary" value="Simpan">Submit</button>

		</form>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="../asset/vendor/jquery/jquery.min.js"></script>
	<script src="../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="../asset/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="../asset/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="../asset/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="../asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="../asset/js/demo/datatables-demo.js"></script>
</body>

</html>