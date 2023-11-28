<?php
    include("../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idfilm=$_GET['deleteid'];
        
        $query = "DELETE from film WHERE idfilm='$idfilm'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: index.php?page=list_film");
            exit;
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>