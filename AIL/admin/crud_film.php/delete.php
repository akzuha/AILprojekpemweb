<?php
    include("../../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idfilm=$_GET['deleteid'];

        $query = "DELETE from film WHERE idfilm='$idfilm'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: ../listwatch.php?page=list_user");
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>