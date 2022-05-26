<?php require('./Model.php');
if (isset($_GET['id_buku'])) {
    EditBuku();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormBuku</title>
</head>
<body>
<form action="" method="post">

    Judul Buku
    <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>

    Nama Penulis
    <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
  
    Penerbit
    <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>

    Tahun Terbit
    <input type="text" name="tahunterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>


    <?php
        if (isset($_GET['id_buku'])) {
            echo "<button type=\"submit\" name=\"edit\">Update</button>";
        } else {
            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
        }
    ?>

    </form>

    <?php
    if (isset($_POST['submit'])) {
        AddBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunterbit']);
    }
    if (isset($_POST['edit'])) {
        UpdateBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunterbit']);
    }
    ?>
</body>
</html>
