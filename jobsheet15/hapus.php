<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "DELETE FROM siswa WHERE id='$id'";
    $result = mysqli_query($connect,$query);
    if($result){
        echo "Data berhasil dihapus";
?>  
    <a href="homeCRUD.php">Lihat Data di Tabel</a>
<?php    
    }else{
        echo "data gagal dihapus". mysqli_error($connect);
    }
?>
