<?php
include "../koneksi.php";
$query = mysqli_query($conn, "SELECT brides.*, produk.name as nama_produk from brides JOIN produk ON brides.Produk_id = produk.id");
?>

<!-- Custom fonts for this template -->
<link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="../asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary mb-3" href="create.php">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Partner</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Service</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if (mysqli_num_rows($query) > 0) { ?>
                            <?php
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data["Name"]; ?></td>
                                        <td><?php echo $data["Partner"]; ?></td>
                                        <td><?php echo $data["Date"]; ?></td>
                                        <td><?php echo $data["Address"]; ?></td>
                                        <td><?php echo $data["nama_produk"]; ?></td>
                                        <td>
                                            <a class="btn btn-primary m-1" href="edit.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Edit Data?');">Edit</a>
                                            <a class="btn m-1 btn-warning" href="delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Delete Data?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php $no++;
                            } ?>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

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