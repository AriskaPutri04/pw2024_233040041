<?php
function cetak_angka ($a)
{
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        } 
     echo "<br>";
    }   
} 

echo cetak_angka (5);
echo "<hr>";
echo cetak_angka (10);
?>