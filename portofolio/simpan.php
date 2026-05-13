<?php
// simpan.php
include 'koneksi.php';

// 1. Tangkap data dari form (atribut name)
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];

// 2. Query untuk memasukkan data ke tabel MySQL
$simpan = mysqli_query($koneksi, "INSERT INTO tb_karya (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$gambar')");

// 3. Cek hasil & arahkan kembali ke index
if($simpan) {
    header("location:index.php");
} else {
    echo "Gagal menyimpan data!";
}
?>