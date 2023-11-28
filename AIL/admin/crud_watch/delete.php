<?php
    include("../../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idmenonton=$_GET['deleteid'];

        $query = "DELETE from meononton WHERE idmenonton ='$idmenonton'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: ../listwatch.php?page=list_user");
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>