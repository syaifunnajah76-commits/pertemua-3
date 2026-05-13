<?php
// hapus.php
include 'koneksi.php';

// Tangkap ID yang dikirim dari tombol Hapus di index.php
$id = $_GET['id'];

// Eksekusi penghapusan (AWAS LUPA WHERE!)
$hapus = mysqli_query($koneksi, "DELETE FROM tb_karya WHERE id='$id'");

if($hapus) {
    header("location:index.php");
} else {
    echo "Gagal menghapus data!";
}
?>