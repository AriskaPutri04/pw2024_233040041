<?php
// Variabel Scope / lingkup variabel 
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();
// echo "<br>";

// SUPERGLOBALS

// variabel global milik PHP
// merupakan Array Associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// echo $_SERVER["SERVER_NAME"];
// echo "<br>";

// $_GET
// $_GET["nama"] = "Ariska Putri";
// $_GET["nrp"] = "233040041";
$mahasiswa= [
    [
        "nama" => "Ariska Putri",
        "nrp" => "233040041",
        "email" => "ariskaputri918@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ariska.jpg"
    ],
    [
        "nama" => "Haifa Zahirah Ramadhan",
        "nrp" => "233040051",
        "email" => "haifazahirahr5@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "haifa.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>



