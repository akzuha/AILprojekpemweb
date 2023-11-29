<?php
    include("../../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idfilm=$_GET['deleteid'];

        $query = "DELETE from film WHERE idfilm='$idfilm'";
        $select = "SELECT * from film WHERE idfilm='$idfilm'";
        $hapus = mysqli_query($koneksi, $select);
        $gambar = mysqli_fetch_array($hapus);
        unlink("images/$gambar[cover]");
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: ../index.php?page=list_film");
            exit;
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>