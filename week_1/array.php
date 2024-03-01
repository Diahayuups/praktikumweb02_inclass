<?php
$hewan = ["Kucing", "Ayam", "Ikan", "Burung", "Badak"];
echo $hewan[0];
echo "<br>";
echo $hewan[3];
echo "<br>";

foreach ($hewan as $key => $value) {
    echo $value . "<br>"; # code...
}

// cara mengubah nilai dari array
$hewan[2] = "Kelinci";
echo $hewan[2];
?>