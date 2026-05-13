<?php

echo "Perulangan dengan for <br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Baris ke-" . $i . "<br>";
}

echo "<hr>";

echo "Perulangan dengan foreach <br>";
$daftar_kopi = ["Espresso", "Latte", "Americano"];
foreach ($daftar_kopi as $kopi) {
    echo "<li>" . $kopi . "</li>";
}

?>