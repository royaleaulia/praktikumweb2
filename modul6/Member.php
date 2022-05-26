<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    DeleteMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <style>
        table, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <a href="FormMember.php"><button>Tambah Data</button></a>
    <a href="index.php"><button>Kembali Ke Index</button></a>
    <br><br>
    <table >
        <tr>
            <th>Id_Member</th>
            <th>Nama</th>
            <th>nomor_member</th>
            <th>alamat</th>
            <th>Tgl daftar</th>
            <th>tgl bayar</th>
            <th>Aksi</th>
        </tr>
        <?= GetAllData("member") ?>
    </table>
</body>
</html>
