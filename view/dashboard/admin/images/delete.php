

<?php
include('../koneksi.php');
$id = $_GET['id'];

// Mengambil nama file gambar dari database sebelum dihapus
$sql = 'SELECT filename FROM image WHERE id="' . $id . '"';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$imageName = $row['filename'];

// Hapus data dari database
$deleteSql = 'DELETE FROM image WHERE id="' . $id . '"';
$query = mysqli_query($conn, $deleteSql);

// Hapus file gambar dari folder
if ($query) {
    $imagePath = './assets/' . $imageName;
    if (file_exists($imagePath)) {
        unlink($imagePath); // Menghapus file gambar dari folder
    }
}

header('location: ./index.php');
?>
