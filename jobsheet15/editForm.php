<html>
    <head>
        <title>Form Tambah Data Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="/css/img/th.jfif" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Pendaftaran Siswa Baru SMA
              </a>
              <div class="d-flex ">
                <span class="navbar-text" style="margin-right: 10px;">
                    text
                </span>
                <a class="navbar-brand" href="#">Log out</a>
              </div>
            </div>
        </nav>
        <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM siswa WHERE id='$id'";
            $result = mysqli_query($connect,$query);
        ?>
        <div class="container" style="margin: 100px;">        
            <form action="proses" method="get"> 
                <?php 
                    while($row=mysqli_fetch_array($result)){
                ?>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">A. No UN SMP/MTs/Sederajat</span>
                    <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>">
                </div>
                  
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">B. Nama Lengkap</span>
                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'];?>">
                </div>
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">C. Jenis Kelamin </span>
                    <input type="text" class="form-control" name="gender" value="<?php echo $row['jk'];?>">
                    <span class="input-group-text" id="basic-addon2">Tempat Lahir</span>
                    <input type="text" class="form-control" name="ttl" value="<?php echo $row['tlahir'];?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">D. Nama Orangtua/wali</span>
                    <input type="text" class="form-control" name="ortu" value="<?php echo $row['nama_ortu'];?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">E. Alamat</span>
                    <textarea class="form-control" name="alamat" ><?php echo $row['alamat'];?></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">F. KOTA/Kabupaten</span>
                    <input type="text" class="form-control" name="kota" value="<?php echo $row['kota'];?>">
                    <span class="input-group-text" id="basic-addon2">No.telp./HP</span>
                    <input type="text" class="form-control" name="hp" value="<?php echo $row['hp'];?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">G. Asal Sekolah</span>
                    <input type="text" class="form-control" name="sekolah" value="<?php echo $row['asal_sekolah'];?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">H. AGAMA</span>
                    <input type="text" class="form-control" name="agama" value="<?php echo $row['agama'];?>">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Kirim</button>
                </div>
                <?php
                    }
                ?>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>