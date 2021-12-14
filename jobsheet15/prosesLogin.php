<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<?php
include "koneksi.php";

$username= $_POST['a'];
$password= md5($_POST['b']);

$query = "select * from user where username='$username' and password='$password'";
    $result = mysqli_query($connect,$query);
    $cek = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($row['level']==1){ 
        session_start();
        $_SESSION['username']= $username;
        $_SESSION['status'] = 'login';
        $_SESSION['level'] = 1; 
        ?>
        <div class="container">
            <div class="jumbotron">
                <p><?php echo "Anda berhasil login sebagai admin anda dapat mengedit dan menambah form.silahkan menuju";?></p>
                <?php header("location:homeCRUD.php"); ?>
            </div>
        </div>  
        <?php
    }else if($row['level'] == 2){
        session_start();
        $_SESSION['username']= $username;
        $_SESSION['status']= 'login';
        $_SESSION['level'] = 2;
        $_SESSION['iduser'] = $row['id'];
        ?>
        <div class="container">
            <div class="jumbotron">
                <p><?php echo "Anda berhasil login sebagai guest anda hanya dapat mengisi form.silahkan menuju";?></p>
                <?php header("location:homeCRUD.php"); ?>
            </div>
        </div>
        <?php
    }else{
        echo "Anda gagal login.silahkan";?>
        <a href="Login.html">Halaman HOME</a>
        <?php
        echo mysqli_error($connect);
    }
?>