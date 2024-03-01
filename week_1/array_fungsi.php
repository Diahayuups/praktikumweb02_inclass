<!DOCTYPE html>
<html>

<body>
    <!-- Fungsi Sort($array) -->
    <h3>Fungsi sort array</h3>
    <?php
    $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . ' - ' . $v . '</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . ' - ' . $v . '</li>';
    }
    echo '</ol>';
    ?>

    <!-- Fungsi array pop -->
    <h3>Fungsi array_pop</h3>
    <?php
    $regu = ["haekal", "ilyas", "tata", "roy"];
    array_pop($regu);
    foreach ($regu as $person) {
        echo $person . "<br>";
    }
    ?>

    <!-- Fungsi array push -->
    <h3>Fungsi array_push</h3>
    <?php
    $tims = ["eka", "unuy", "tata", "nanas"];
    array_push($tims, "lala");
    foreach ($tims as $people) {
        echo $people . "<br>";
    }
    ?>

    <!-- Fungsi array shift -->
    <h3>Fungsi array_shift</h3>
    <?php
    $cuaca = ["hujan", "panas", "mendung", "cerah"];
    array_shift($cuaca);
    foreach ($cuaca as $awan) {
        echo $awan . "<br>";
    }
    ?>

    <!-- Fungsi array unshift -->
    <h3>Fungsi array_unshift</h3>
    <?php
    $anggota = ["diah", "eka", "tata", "unuy"];
    array_unshift($anggota, "lala", "jojo");
    foreach ($anggota as $member) {
        echo $member . "<br>";
    }
    ?>

</body>

</html>