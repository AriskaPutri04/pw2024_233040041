<?php
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
    ],
    [
        "nama" => "Nurfatimah",
        "nrp" => "233040074",
        "email" => "nurfatimahhh1603z@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nurfatimah.jpg"
    ],
    [
        "nama" => "Chalida Rahma Listy Hidayat",
        "nrp" => "233040046",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chalida.jpg"
    ],
    [
        "nama" => "Ellen Aplida Zalni",
        "nrp" => "233040061",
        "email" => "ellenaplizalni@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ellen.jpg"
    ],
    [
        "nama" => "Dea Wardini",
        "nrp" => "233040003",
        "email" => "deawardini90@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dea.jpg"
    ],
    [
        "nama" => "Icha Aprilia Putri",
        "nrp" => "233040108",
        "email" => "ap8771067@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "icha.jpg" 
    ],
    [
        "nama" => "Daffa Kamiliya Mufidah",
        "nrp" => "233040055", 
        "email" => "kamiliyamufidah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kamiliya.jpg"
    ],
    [
        "nama" => "Lala Arisanty",
        "nrp" => "2308996",
        "email" => "lalaarisanty01@gmail.com",
        "jurusan" => "Sistem Telekomunikasi",
        "gambar" => "lala.jpg"
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