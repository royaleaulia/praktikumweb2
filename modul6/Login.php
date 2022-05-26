
<?php
session_start();
$no = NULL;
$pass = NULL;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['nomember'])){
            $no = ($_POST['nomember']);
        }
        if (isset($_POST['pass'])){
            $pass =($_POST['pass']);
        }

        include 'Koneksi2.php';
        include 'Koneksi.php';






    if(!empty($no) && !empty($pass)){
        $sql = mysqli_query($connect, "Select * from member where nomor_member = '$no' and password = '$pass'");
        $result = mysqli_num_rows($sql);

        if($result){
            
        $_SESSION["Login"]=true;
        header("Location: index.php");


        }else{
            header("Location: ErrorPage.php");
        } 
    }else{
        header("Location: ErrorPage2.php");
    }




}
?>




