<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203.php</title>
</head>
<body>
    <div>
        <form method="POST">
            <label>Nilai: </label>
            <input type = "text" name = "nilai">
            <br>
            <label>Dari: </label>
            <br>
            <input type = "radio" name = "nilaiawal" value = "cawal">Celcius
            <br>
            <input type = "radio" name = "nilaiawal" value = "fawal">Fahreinheit
            <br>
            <input type = "radio" name = "nilaiawal" value = "kawal">Kelvin
            <br>
            <input type = "radio" name = "nilaiawal" value = "rawal">Reamur
            <br>

            <label> Ke :</label>
            <br>
            <input type = "radio" name = "nilaiakhir" value = "cakhir">Celcius
            <br>
            <input type = "radio" name = "nilaiakhir" value = "fakhir">Fahreinheit
            <br>
            <input type = "radio" name = "nilaiakhir" value = "kakhir">Kelvin
            <br>
            <input type = "radio" name = "nilaiakhir" value = "rakhir">Reamur
            <br>
            <input type="submit" name="konversisuhu" value="Konversi">
            <br>
        </form>
    </div>

    <?php
        $nilai = NULL;
        $nilaiwal = NULL;
        $nilaiakhir = NULL;

        if(($_POST['konversisuhu'])){
            $nilai = $_POST['nilai'];
            $nilaiwal = $_POST['nilaiawal'];
            $nilaiakhir = $_POST['nilaiakhir'];
            switch($nilaiwal){
                case "cawal" :
                    switch($nilaiakhir){
                        case "cakhir" :
                            echo "<h1> Hasil Konversi: $nilai &deg;C</h1>";
                            break;
                        case "fakhir" :
                            $hasil = $nilai * 9 / 5 + 32;
                            echo "<h1> Hasil Konversi: $hasil &deg;F</h1>";
                            break;
                        case "rakhir" :
                            $hasil = $nilai * 4 / 5;
                            echo "<h1> Hasil Konversi: $hasil &deg;R</h1>";
                            break;
                        case "kakhir" :
                            $hasil = $nilai + 273;
                            echo "<h1> Hasil Konversi: $hasil &deg;K</h1>";
                            break;
                        default:
                            echo "Anda belum memilih!!";
                    
                    }
                    break;

                    case "fawal" :
                        switch($nilaiakhir){
                        case "cakhir" :
                            $hasil = ($nilai - 32) * 5 / 9;
                            echo "<h1> Hasil Konversi: $hasil &deg:C</h1>";
                            break;
                        case "fakhir" :
                            echo "<h1> Hasil Konversi: $nilai &deg;F</h1>";
                            break;
                        case "rakhir" :
                            $hasil = ($nilai - 32) * 4 / 9;
                            echo "<h1> Hasil Konversi: $hasil &deg;R</h1>";
                            break;
                        case "kakhir" :
                            $hasil = ($nilai - 32) * 5 / 9 + 273;
                            echo "<h1> Hasil Konversi: $hasil &deg;K</h1>";
                            break;
                        default:
                            echo "Anda belum memilih!!";
                        }
                        break;
                    case "rawal" :
                        switch($nilaiakhir){
                        case "cakhir" :
                            $hasil = $nilai * 5 / 4;
                            echo "<h1> Hasil Konversi: $hasil &deg;C</h1>";
                            break;
                        case "fakhir" :
                            $hasil = $nilai * 9 / 4 + 32;
                            echo "<h1> Hasil Konversi: $hasil &deg;F</h1>";
                            break;
                        case "rakhir" :
                            echo "<h1> Hasil Konversi: $nilai &deg;R</h1>";
                            break;
                        case "kakhir" :
                            $hasil = $nilai * 5 / 4 + 273;
                            echo "<h1> Hasil Konversi: $hasil &deg;K</h1>";
                            break;
                        default:
                            echo "Anda belum memilih!!";
                        }
                        break;

                    case "kawal" :
                        switch($nilaiakhir){
                        case "cakhir" :
                            $hasil = $nilai - 273 ;
                            echo "<h1> Hasil Konversi: $hasil &deg;C</h1>";
                            break;
                        case "fakhir" :
                            $hasil = ($nilai - 273) * 9 / 5 + 32;
                            echo "<h1> Hasil Konversi: $hasil &deg;F</h1>";
                            break;
                        case "rakhir" :
                            $hasil = ($nilai - 273) * 4 / 5;
                            echo "<h1> Hasil Konversi: $hasil &deg;R</h1>";
                            break;
                        case "kakhir" :
                            echo "<h1> Hasil Konversi: $nilai &deg;K</h1>";
                            break;
                        default:
                            echo "Anda belum memilih!!";
                        }
                        break;
                    default:
                        echo "Anda belum memilih!!";

            }



        }

    ?>

</body>
</html>
