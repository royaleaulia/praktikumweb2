<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202.php</title>
</head>
<body>
    <style type="text/css">
           #berwarna {color : #DC143C;}
    </style>

        <form method = "POST">

            <label>Nama: </label><input type="text" name="nama"><label id='berwarna'>*</label>
            <?php
                $nama = NULL;
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    if($nama == NULL){
                        echo
                        "<label id='berwarna'> nama tidak boleh kosong</label>";
                    }
                }
            ?>

            <br>
            <label>NIM: </label><input type="text" name="nim"><label id='berwarna'>*</label>
            <?php
                $nim = NULL;
                if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    if($nim == NULL){
                        echo
                        "<label id='berwarna'> nim tidak boleh kosong</label>";
                    }
                }
            ?>

            <br>
            <label>Jenis Kelamin: </label><label id='berwarna'>*</label>
            <?php
                $jeniskelamin = NULL;
                if(isset($_POST['submit'])){
                    $jeniskelamin = isset($_POST['jeniskelamin']);
                    if($jeniskelamin == NULL){
                        echo
                        "<label id='berwarna'> jenis kelamin tidak boleh kosong</label>";
                    }
                }
            ?>


            <br>
            <input type="radio" name="jeniskelamin" value="lakilaki">Laki-Laki
            <br>
            <input type="radio" name="jeniskelamin" value="perempuan">Perempuan
            <br>
            <input type="submit" name="submit" value="Submit">
            <br>
        </form>




    </div>
    <?php
        if($nama != NULL && $nim != NULL && $jeniskelamin != NULL){
            echo "$nama <br>";
            echo "$nim <br>";
            if($jeniskelamin == "lakilaki"){
                echo "Laki-Laki";
            } elseif($jk == "perempuan"){
                echo "Perempuan";
            }
        }
        ?>
</body>
</html>
