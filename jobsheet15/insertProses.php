<?php
include 'koneksi.php';

$id = $_GET['id'];
$iduser = $_GET['iduser'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$jk = $_GET['gender'];
$tlahir = $_GET['ttl'];
$namaOrtu = $_GET['ortu'];
$kota = $_GET['kota'];
$hp = $_GET['hp'];
$sekolah = $_GET['sekolah'];
$agama = $_GET['agama'];

$sql = "insert into siswa(id,iduser,nama,jk,tlahir,nama_ortu,alamat,kota,hp,asal_sekolah,agama)
        value ('$id','$iduser','$nama','$jk','$tlahir','$namaOrtu','$alamat','$kota','$hp','$sekolah','$agama')";
if(mysqli_query($connect,$sql)){
    echo "Data siswa berhasil ditambahkan";
}else{
    echo "Data siswa gagal ditambahkan <br>". mysqli_error($connect);
}
mysqli_close($connect);
?>
<a href="homeCRUD.php">Lihat data di Tabel</a>