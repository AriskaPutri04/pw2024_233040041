<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 6b</title>

    <style>
        .box2,
        .box1 {
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            background-color: steelblue;
            display: inline-block;
            margin: 2px;
            border: 2px solid black;
        }
        .box2 {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <li>
            <label for="number">Masukan Angka :</label>
            <input type="text" name="angka" id="number">
            <button type="submit" name="submit">Submit</button>
        </li>
    </form>
    <br>

    <?php
    if(isset($_POST["angka"]) ) {
        $angka = $_POST["angka"]; 
        for ($i = $angka; $i >= 1; $i--) {
            for ($t = 1; $t <= $i; $t++) {
                if ($i % 2 == 0) {
                    echo "<div class= 'box1'>$i</div>";
                } else {
                    echo "<div class= 'box2'>$i</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }
    ?>
</body>
 
</html>