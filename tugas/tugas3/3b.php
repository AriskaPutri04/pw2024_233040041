<?php

function urutanAngka($angka)
{
    $number = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}

echo urutanAngka(5);

?>