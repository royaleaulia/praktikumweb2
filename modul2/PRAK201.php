<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201.php</title>
</head>
<body>
    <div>
        <form method = "POST">
            <label>Nama: 1 </label>
            <input type = "text" name="nama[]">
            <br>
            <label>Nama: 2 </label>
            <input type = "text" name="nama[]">
            <br>
            <label>Nama: 3 </label>
            <input type = "text" name="nama[]">
            <br>
            <button type="submit">Urutkan</button>
    </div>
    <?php
        $nama = [];
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(($_POST['nama'])){
                $nama = $_POST['nama'];
                echo "<b>Output</b><br>";
            }
        }
        sort($nama);
        foreach ($nama as $index => $isi){
            echo "$isi<br>";
        }

    ?>
</body>
</html>
