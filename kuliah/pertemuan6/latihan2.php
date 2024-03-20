<?php
// $mahasiswa = [
//     ["Ariska Putri", "233040041", "ariskaputri918@gmail.com", "Teknik Informatika"],
//     ["Haifa Zahirah Ramadhan", "233040051", "haifazahirahr5@gmail.com", "Teknik Informatika"],
//     ["Nada Putri Aqilah Rukanda", "233040038", "putriaqilah05@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yang kita buat sendiri
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
    ],
    [
        "nama" => "Nada Putri Aqilah Rukanda",
        "nrp" => "233040038",
        "email" => "putriaqilah05@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nada.jpg"   
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li> 
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>