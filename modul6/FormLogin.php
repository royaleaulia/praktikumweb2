<?php
    session_start();
    include 'Koneksi2.php';
    include 'Koneksi.php';

    if (isset($_SESSION["Login"])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<body>
    <form action="Login.php" method="POST">
        <label>No Member : </label>
        <input type="text" name="nomember"><br>
        <label>Password : </label>
        <input type="password" name="pass"><br>
        <input type="submit" name="cetak" value="Masuk"><br>
    </form>
    
</body>
</html>
