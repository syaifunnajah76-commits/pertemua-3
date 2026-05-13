<?php

echo "array numeric <br>";
$menu = array("Kopi", "Teh", "Susu");
echo $menu[1]; // Akan mencetak: Kopi1
echo "<hr>";

echo "array associative <br>";
$user = [
    "nama" => "Labib",
    "role" => "Admin",
    "profile_url" => "https://example.com/profile/labib"
];
echo "Halo " . $user['role']; // Akan mencetak: Halo Labib

?>