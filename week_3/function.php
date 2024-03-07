<?php
function tambah($nilai1, $nilai2, $nilai3, $nilai4)
{
    echo $nilai1 + $nilai2 + $nilai3 + $nilai4;
}
tambah(3, 4, 4, 9);
echo "<hr>";
// hitung umur

function hitungUmur($tahunlahir, $tahunSekarang = 2024)
{
    echo $tahunSekarang - $tahunlahir;
}
hitungUmur(2003);