<?php
session_start();
?>
<html>
    <head>
        <title>Form Tambah Data Siswa</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <?php 
                    if($_SESSION['level'] == 1){
                        echo "Halaman Admin";
                    }else{
                        echo "Halaman Siswa";
                    }
                ?>
              </a>
              <?php 
                    if($_SESSION['level'] == 2){
                        ?>
                        <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-secondary" class=""><a href="insertForm.php"class="text-light text-decoration-none">Data baru</a></button>
                        </div>
                        <?php
                    }
              ?>
              
              <div class="d-flex">
                <span class="navbar-text" style="margin-right: 10px;">
                    <?php echo "Selamat datang ".$_SESSION['username']."."?>
                </span>
                <a class="navbar-brand" href="">Log out</a>
              </div>
            </div>
        </nav>
        
        <div class="container" style="margin-top: 50px">
        <table class="table table-striped">
            <tr>
                <th>NO UN</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>Tempat Lahir</th>
                <th>Nama Orang Tua</th>
                <th>Alamat</th>
                <th>Kota/kabupaten</th>
                <th>No HP</th>
                <th>Asal Sekolah</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
            <?php
                include "koneksi.php";
                $iduser = $_SESSION['iduser'];
                $queryAdmin = "SELECT * FROM siswa";
                $querySiswa = "SELECT * FROM siswa where iduser ='$iduser'";
                if($_SESSION['level'] == 1){
                    $result = mysqli_query($connect, $queryAdmin);
                }else{
                    $result = mysqli_query($connect, $querySiswa);
                }
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
            ?> 
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jk']?></td>
                <td><?php echo $row['tlahir']?></td>
                <td><?php echo $row['nama_ortu']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['kota']?></td>
                <td><?php echo $row['hp']?></td>
                <td><?php echo $row['asal_sekolah']?></td>
                <td><?php echo $row['agama']?></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a>
                </td>
            </tr>
            <?php          
                    }
                }else{
                    echo "0 result";
                }
            ?>
        </table>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>