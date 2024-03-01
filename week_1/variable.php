<?php
$nama_lengkap = "Diah ayu puspasari";
$jurusan = "Teknik Informatika";
$semester = 2;
$sudahLulus = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?php echo $nama_lengkap ?>
    </h2>
    <p>Hai nama saya
        <?php echo $nama_lengkap ?>
    </p>
    <p>
        Saya kuliah di jurusan
        <?php echo $jurusan ?>
    </p>
    <p>
        Saya berada di semester
        <?php echo $semester ?>
    </p>
    <p>
        <?php echo $sudahLulus ?>
    </p>
</body>

</html>