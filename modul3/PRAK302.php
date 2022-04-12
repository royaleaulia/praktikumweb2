<html>
<style type="text/css">
    img {
        width : 16px;
        height : 16px;
    }
    td {
        float : right;
    }
</style>
<body>
    <form method="POST">
        <label>Tinggi : </label>
        <input type="text" name="tinggi"><br>
        <label>Alamat Gambar : </label>
        <input type="url" name="alamatgambar"><br>
        <input type="submit" name="cetak" value="Cetak"><br>
    </form>
    <?php
    $tinggi = NULL;
    $alamatgambar = NULL;
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['tinggi'])){
                $tinggi = htmlspecialchars($_POST['tinggi']);
            }
            if (isset($_POST['alamatgambar'])){
                $alamatgambar = $_POST['alamatgambar'];
            }
            $batas = 0;
            echo "<table>";
            while ($tinggi > $batas){
                $ulang = 0;
                echo "<tr><td>";
                while ($ulang < $tinggi){
                    echo "<img src='$alamatgambar'>";
                    $ulang ++;
                }
                echo "</td></tr>";
                $tinggi --;
            }
            echo "</table>";
        }
    ?>
</body>
</html>
