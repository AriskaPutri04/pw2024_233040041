<?php
$komponen_hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas-4b</title>
</head>

<body>
   <h3>Macam-macam perangkat keras komputer</h3> 
   <ol>
        <?php foreach ($komponen_hardware as $kh) : ?>
            <li><?= $kh; ?></li>
        <?php endforeach; ?>
   </ol>

   <!-- Menambahkan 2 perangkat & diurutkan (A-Z) -->
   <h3>Macam-macam perangkat keras komputer baru</h3>
    <?php
    array_push($komponen_hardware, "Card Reader", "Modem");
    sort($komponen_hardware);
    ?>

    <ol>
        <?php foreach ($komponen_hardware as $kh) : ?>
            <li><?= $kh; ?></li>
        <?php endforeach; ?>
     </ol>
</body>

</html>