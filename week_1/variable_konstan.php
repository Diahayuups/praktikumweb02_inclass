<?php
// definisikan konstanta

define("PHI", "3.14");
define("DBNAME", "inventori");
define("DBSERVER", "localhost");

$jari = "10";
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari jari" . $jari . ":" . $luas;
echo "<br> Dengan keliling :" . $keliling;
?>

<hr>
<?php
echo "Nama databasenya :" . DBNAME;
echo "<br> Lokasi databasenya terdapat pada " . DBSERVER;
?>