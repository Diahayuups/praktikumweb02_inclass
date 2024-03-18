<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Horeee! You Did it! Cumlaude!!";
        } else {
            echo "You did a great job!";
        }
    }
}

$mahasiswa = new mahasiswa("Diah ayu puspasari", "0110223052", "Bogor", "Teknik Informatika", "3.8");
$mahasiswa->setPredikatIPK($mahasiswa->ipk);

echo "<br>";
echo "<hr>";

echo "Nama Lengkap : " . $mahasiswa->namaMahasiswa;
echo "<br>";
echo "Nim : " . $mahasiswa->nim;
echo "<br>";
echo "Domisili : " . $mahasiswa->domisili;
echo "<br>";
echo "Prodi : " . $mahasiswa->prodi;
echo "<br>";
echo "Predikat IPK : " . $mahasiswa->ipk;

?>