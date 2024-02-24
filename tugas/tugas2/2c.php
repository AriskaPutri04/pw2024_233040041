<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2c</title>

    <style>
        .box {
            display: inline-flex;
            width: 55px;
            height: 55px;
            background-color: lightblue;
            border: 2px solid black;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class= "box">' . $j . '</div>';
        }
        echo "<br>";
    }
    ?>
</body>

</html>