<?php
include "../koneksi.php";

if(isset($_POST['Input']) && $_POST['Input'] == 'Simpan') {
	$id = addslashes (strip_tags ($_POST['id']));
	$nama = addslashes (strip_tags ($_POST['nama']));
	$email = addslashes (strip_tags ($_POST['email']));
	$phone = addslashes (strip_tags ($_POST['phone']));
	$pesan = addslashes (strip_tags ($_POST['pesan']));

	$qsiswa=$conn->query("INSERT INTO pesan VALUES('$id','$nama','$email','$phone','$pesan')");
	if($_POST > 0){
		echo "<script>
				alert ('Data berhasil di Tambahkan');
				document.location.href='index.php';
				</script>";
			}else{
			echo "<script>
				alert ('Data gagal di Tambahkan');
				document.location.href='index.php';
				</script>";	
		}
}
?>
<html>
<head>
	<title></title>
		<!-- Custom fonts for this template -->
		<link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link
			href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			rel="stylesheet">

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
               <form ACTION="" class="w-75 mt-3" method="POST" NAME="input" >

                    <div class="mb-3 w-50">
                         <label class="form-label">Nama</label>
                         <input type="text" class="form-control" name="nama" required>
                    </div>

					
                    <div class="mb-3 w-50">
                         <label class="form-label">Email</label>
                         <input type="text" class="form-control" name="email" required>
                    </div>

					
                    <div class="mb-3 w-50">
                         <label class="form-label">No Hp</label>
                         <input type="text" class="form-control" name="phone" required>
                    </div>

                    <div class="mb-3 w-50">
                         <label class="form-label">Pesan</label>
                         <input type="text" class="form-control" name="pesan" required>
                    </div>
                    
                    <button type="submit" name="Input" class="btn btn-primary" value="Simpan" >Submit</button>
                   
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