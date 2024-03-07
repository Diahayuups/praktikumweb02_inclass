<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['program_studi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

?>

<h1>Terimakasih sudah mendaftar di IT Club Data Science! <br> Semoga hasilnya sesuai harapan ya!</h1>
<h5>NIM :
    <?php echo $nim ?>
</h5>
<h5>Nama Lengkap :
    <?php echo $nama ?>
</h5>
<h5>Jenis Kelamin :
    <?php echo $jenis_kelamin ?>
</h5>
<h5>Prodi :
    <?php echo $prodi ?>
</h5>
<h5>Skill :
    <?php echo $keahlian ?>
</h5>
<h5>Domisili :
    <?php echo $domisili ?>
</h5>
<h5>Email :
    <?php echo $email ?>
</h5>