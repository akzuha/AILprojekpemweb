<?php
    include("../../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idakun=$_GET['deleteid'];

        $query = "DELETE from supplier WHERE idsupplier='$idakun'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: ../index.php?page=list_supplier");
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>