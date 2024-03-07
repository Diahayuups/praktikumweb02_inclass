<?php

// mencetak angka 1 sampai 10 menggunakan for
for ($i = 0; $i < 10; $i++) {
    echo "<h3>$i</h3>";
}

// foreach 
$buah = ['mangga', 'jeruk', 'semangka', 'apel'];
foreach ($buah as $b) {
    echo "<h3>{$b}</h3>";
}
?>