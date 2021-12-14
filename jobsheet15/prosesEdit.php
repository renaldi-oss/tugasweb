<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $jk = $_GET['gender'];
    $tlahir = $_GET['ttl'];
    $namaOrtu = $_GET['ortu'];
    $kota = $_GET['kota'];
    $hp = $_GET['hp'];
    $sekolah = $_GET['sekolah'];
    $agama = $_GET['agama'];

    $query = "UPDATE siswa 
    SET nama='$nama',
    alamat='$alamat',
    jk='$jk',
    tlahir ='$tlahir',
    nama_ortu='$namaOrtu',
    alamat = 'alamat',
    kota = 'kota',
    hp = '$hp',
    asal_sekolah='$sekolah',
    agama='$agama' WHERE id='$id'";

    $result = mysqli_query($connect,$query);

    if($result){
        echo "Berhasil update data ke database";
?>
    <div class=""></div>
    <a href="homeCRUD.php">Lihat data di Tabel</a>
<?php
    }else{
        echo "Gagal update data". mysqli_error($connect);
    }
?>