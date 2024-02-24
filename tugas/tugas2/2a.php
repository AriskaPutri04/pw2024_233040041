<?php
$namadepan = "Ariska";
$namabelakang = "Putri";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $namadepan . " " . $namabelakang . "<br>";
    } else if ($i % 3 == 0) {
        echo $namadepan . "<br>";
    } else if ($i % 5 == 0) {
        echo $namabelakang . "<br>";
    } else {
        echo $i . "<br>";
    }
}
