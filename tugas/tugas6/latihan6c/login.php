<?php
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ) { 

    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, redirect ke halaman admin 
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: cornflowerblue;
            text-align: center;
            margin: 100px 0;
            font-family: "Merienda", cursive;
        }

        img {
            height: 17%;
            width: 17%;
            border-radius: 45%;
            line-height: 150px;
        }

        ul form li {
            font-family: "Merienda", cursive;
            margin-bottom: 10px;
            list-style: none;
        }

        h1 {
            font-size: 2rem;
            color: darkblue;
            text-shadow: 2px 2px 2px blue;
        }

        button {
            margin-top: 10px;
            padding: 10px 10px;
            background-color: dodgerblue;
            color: darkblue;
            border-radius: 3px;
            cursor: pointer;
            box-shadow: 1px 1px 1px blue;
            font-family: "Merienda", cursive;
            
        }

        p {
            font-family: "Merienda", cursive;  
            font-size: 17px;
            font-weight: 300px;
            text-shadow: 0.5px 0.5px 0.5px black;
            
        }
    </style>
</head>

<body>
    <h1>Login Admin</h1>
    <img src="img/chibii2.jpeg" alt="">

    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic">Username / Password salah!</p>
    <?php endif; ?>

    <ul>
    <form action="" method="post"> 
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login Here!</button>
        </li>
   
    </form>
    </ul>
</body>

</html>