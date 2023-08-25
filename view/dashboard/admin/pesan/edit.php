<?php
error_reporting(0); 
include "../koneksi.php";
?>

<?php

$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pesan where id='$_GET[id]'"));
$nama= mysqli_real_escape_string($conn, $_POST['nama']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$phone= mysqli_real_escape_string($conn, $_POST['phone']);
$pesan= mysqli_real_escape_string($conn, $_POST['pesan']);

if(isset($_POST['Edit'])){
 if(empty($nama)){
        $error="<p style='color:#F00;'>* Masukan Nama</p>";
    }
    elseif(empty($email)){
        $error="<p style='color:#F00;'>* Masukan Email </p>";
    }
    elseif(empty($phone)){
     $error="<p style='color:#F00;'>* Masukan No Hp </p>";
     }    
     elseif(empty($pesan)){
          $error="<p style='color:#F00;'>* Masukan Pesan </p>";
     }
    else{ 

    $save=mysqli_query($conn, "UPDATE pesan set nama='$nama',email='$email',phone='$phone',pesan='$pesan' where id='$_GET[id]'");
   if($save){ 
        echo "<script>alert('Data Pesan Berhasil disimpan ke');document.location='index.php'</script>";
    }
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
                         <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required>
                    </div>

                    <div class="mb-3 w-50">
                         <label class="form-label">Email</label>
                         <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" required>
                    </div>
                    
                    <div class="mb-3 w-50">
                         <label class="form-label">No Hp</label>
                         <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>" required>
                    </div>

                    <div class="mb-3 w-50">
                         <label class="form-label">Pesan</label>
                         <input type="text" class="form-control" name="pesan" value="<?php echo $data['pesan']; ?>" required>
                    </div>
                    
                    <button type="submit" name="Edit" class="btn btn-primary" value="Edit" >Submit</button>
                   
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