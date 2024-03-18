<?php

class HewanMamalia
{

    public $warna;
    public $namaHewan;
    public $habitat;

    function makan()
    {
        return "Mamalia Makan";
    }

    function minum()
    {
        return "Mamalia Minum";
    }

    function menyusui()
    {
        return "Mamalia Menyusui";
    }

    function melahirkan()
    {
        return "Mamalia Melahirkan";
    }
}

$mamalia = new HewanMamalia();
echo $mamalia->namaHewan = "Pinguin";
echo "<br>";
echo $mamalia->warna = "Biru";
echo "<br>";
echo $mamalia->habitat = "Samudra Atlantis";
echo "<br>";
echo "my atlantis we fall..";

echo "<br>";
echo "<hr>";

echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";
echo $mamalia->melahirkan();

?>