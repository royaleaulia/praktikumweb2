<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="kata">
        <input type="submit" name="submit" value="submit"><br>
    </form>
    <?php
    $kata = 0;
    $panjangkata = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['kata'])){
                $kata = htmlspecialchars($_POST['kata']);
            }
            $panjangkata = strlen($kata);
            $i = 0;

            while($i < $panjangkata){
                $k = $panjangkata;

                while($k > 0){
                    if ($k == $panjangkata){
                        echo strtoupper($kata[$i]);
                    } else echo strtolower($kata[$i]);
                    $k--;
                }

                $i++;
            }
        }
    ?>
</body>
</html>
