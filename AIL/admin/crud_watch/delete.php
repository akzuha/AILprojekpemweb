<?php
    include("../../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idwatch=$_GET['deleteid'];

        $query = "DELETE from watch WHERE idwatch='$idwatch'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: ../listwatch.php?page=list_user");
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>