<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204.php</title>
</head>
<div>
<body>
<style type="text/css">
           h1{
               text : bold;
           }
    </style>

    <form method = "POST">
        <label>Nilai : </label>
        <input type = "text" name = "nilai">
        <br>
        <input type = "submit" name = "konversi" value = "Konversi">
        <br>
    </form>
</div>


    <?php
    $nilai = NULL;
    if(isset($_POST['konversi'])){
        $nilai = $_POST['nilai'];
        echo "<h1>";
        if($nilai == 0){
            echo "Hasil: Nol";
        }
        elseif($nilai >= 1 && $nilai <= 9){
            echo "Hasil: Satuan";
        }
        elseif($nilai >= 10 && $nilai <= 19){
            echo "Hasil: Belasan";
        }        
        elseif($nilai >= 20 && $nilai <= 99){
            echo "Hasil: Puluhan";
        }
        elseif($nilai >= 100 && $nilai <= 999){
            echo "Hasil: Ratusan";
        }
        elseif($nilai >= 1000 ){
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
        else{
            echo "Nilai Yang anda masukan tidak valid";
        }
        echo "</h1>";
    }
    ?>
</body>
</html>
