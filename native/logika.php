<?php

$nama_kopi1 = "kapal api";
$nama_kopi2 = "torabika";

$harga_kopi = 15000;
$jumlah_beli = 3;
$total_belanja = $harga_kopi * $jumlah_beli;
$total_bayar = $total_belanja;
$member = false;
$diskon = 0;


if ($total_belanja > 100000 && $member == true) {
   
    echo "Anda adalah member, maka Anda mendapatkan diskon 20% <br>";
    $diskon = $total_belanja * 0.2;
    $total_bayar = $total_belanja - $diskon;
  
} elseif ($total_belanja > 50000) {

    echo "Anda dapat Diskon 5% <br>";
      $diskon = $total_belanja * 0.05;
    $total_bayar = $total_belanja - $diskon;
} else {
    echo "Belanja lagi untuk dapat diskon!";
}

echo "Nama Kopi 1: " . $nama_kopi2 . "<br>";
 echo "harga kopi: " . $harga_kopi . "<br>";
    echo "jumlah beli: " . $jumlah_beli . "<hr>";
    echo "Total Belanja: " . $total_belanja . "<br>";
  echo "anda mendapatkan Diskon sebesar : " . $diskon . "<br>";
    echo "Total Bayar: " . $total_bayar;
?>