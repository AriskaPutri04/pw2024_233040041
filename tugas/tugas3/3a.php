<?php

//  luas lingkaran
echo "<h4>Menghitung Luas Lingkaran</h4>";

function hitungLuasLingkaran($r)
{
    echo "Jari-jari = " . $r . "cm. <br>";
    $luas = 3.14 * $r * $r;
    echo "Luas lingkaran = $luas cm<sup>2</sup> <br>";
}

hitungLuasLingkaran(10); 
echo "<hr>";

// keliling  lingkaran
echo "<h4>Menghitung Keliling Lingkaran</h4>";

function hitungKelilingLingkaran($r)
{
    echo "Jari-jari = " . $r . "cm. <br>";
    $keliling = 2 * 3.14 *$r;
    echo "Keliling lingkaran = $keliling cm <br>";
}

hitungKelilingLingkaran(20);
echo "<hr>";

?>