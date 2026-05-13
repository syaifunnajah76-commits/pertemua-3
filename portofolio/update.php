<?php
// update.php
include 'koneksi.php';

$id = $_POST['id']; // Ditangkap dari input type="hidden"
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];

// INGAT: Wajib pakai WHERE id=...
$update = mysqli_query($koneksi, "UPDATE tb_karya SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id'");

if($update) {
    header("location:index.php");
} else {
    echo "Gagal mengupdate data!";
}
?>