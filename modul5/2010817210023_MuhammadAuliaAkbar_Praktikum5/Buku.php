<?php
require('./Model.php');
if (isset($_GET['id_buku'])) {
    DeleteBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <style>
        table, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<a href="FormBuku.php"><button>Tambah Data</button></a>
<a href="index.php"><button>Kembali Ke Index</button></a>
    <br><br>
    <table border="1">
        <tr>
            <th>Id Buku</th>
            <th>Judul Buku</th>
            <th>Penulis Bukur</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?= GetAllData("buku") ?>
    </table>
</body>
</html>