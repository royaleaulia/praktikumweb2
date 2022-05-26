<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    DeletePeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <style>
        table, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<a href="FormPeminjaman.php"><button>Tambah Data</button></a>
<a href="index.php"><button>Kembali Ke Index</button></a>
<br><br>
    <table border="1">
        <tr>
            <th>Id Peminjaman</th>
            <th>Id Member</th>
            <th>Id Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= GetAllData("peminjaman") ?>
    </table>
</body>
</html>
