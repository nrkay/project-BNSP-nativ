<?php
error_reporting(0);
include "../koneksi.php";
?>

<?php

$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM brides where id='$_GET[id]'"));
$name = mysqli_real_escape_string($conn, $_POST['Name']);
$address = mysqli_real_escape_string($conn, $_POST['Address']);
$date = mysqli_real_escape_string($conn, $_POST['Date']);
$partner = mysqli_real_escape_string($conn, $_POST['Partner']);
$produk_id = mysqli_real_escape_string($conn, $_POST['Produk_id']);

if (isset($_POST['Edit'])) {
     if (empty($name)) {
          $error = "<p style='color:#F00;'>* Masukan Nama</p>";
     } elseif (empty($address)) {
          $error = "<p style='color:#F00;'>* Masukan Alamat </p>";
     } elseif (empty($date)) {
          $error = "<p style='color:#F00;'>* Masukan Tanggal </p>";
     } elseif (empty($partner)) {
          $error = "<p style='color:#F00;'>* Masukan Nama Partner Hidup</p>";
     } elseif (empty($produk_id)) {
          $error = "<p style='color:#F00;'>* Masukan Jenis Produk</p>";
     } else {

          // $save = mysqli_query($conn, "UPDATE paket set Name='$nama_paket',Address='$harga', Date='$deskripsi', Produk_id='$produk_id', Partner='$partner_id' where id='$_GET[id]'");


          $updateQuery = "UPDATE brides set Name='$name',Address='$address', Date='$date', Produk_id='$produk_id', Partner='$partner' WHERE id = '$_GET[id]'";
          // if ($updateQuery) {
          //      echo "<script>alert('Data Paket Berhasil disimpan ke');document.location='index.php'</script>";
          // }
          if (mysqli_query($conn, $updateQuery)) {
               echo "Data updated successfully.";
               header('location: index.php');
          } else {
               echo "Error updating data: " . mysqli_error($conn);
          }
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
          <form ACTION="" class="w-75 mt-3" method="POST" NAME="input">

               <div class="mb-3 w-50">
                    <label class="form-label">Name : </label>
                    <input type="text" class="form-control" name="Name" value="<?php echo $data['Name']; ?>" required>
               </div>

               <div class="mb-3 w-50">
                    <label class="form-label">Partner : </label>
                    <input type="text" class="form-control" name="Partner" value="<?php echo $data['Partner']; ?>" required>
               </div>

               <div class="mb-3 w-50">
                    <label class="form-label">Address : </label>
                    <input type="text" class="form-control" name="Address" value="<?php echo $data['Address']; ?>" required>
               </div>

               <div class="mb-3 w-50">
                    <label class="form-label">Date : </label>
                    <input type="date" class="form-control" name="Date" required>
               </div>
               <div class="mb-3 w-50">
                    <label class="form-label">Service : </label>
                    <select class="form-select" aria-label="Default select example" name="Produk_id">
                         <option selected>Select</option>
                         <?php
                         $query = "SELECT * FROM produk";
                         $result = mysqli_query($conn, $query);
                         while ($item = mysqli_fetch_assoc($result)) { ?>
                              <option value="<?php echo $item["id"]; ?>"> <?php echo $item["name"]; ?></option>
                         <?php } ?>


                    </select>
               </div>

               <button type="submit" name="Edit" class="btn btn-primary" value="Edit">Edit</button>

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