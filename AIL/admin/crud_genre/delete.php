<?php
    include("../../koneksi.php");

    if(isset($_GET['deleteid'])){
        $idgenre=$_GET['deleteid'];

        $query = "DELETE from genre WHERE idgenre='$idgenre'";
        $result = mysqli_query($koneksi,$query);
        if($result){
            echo "deleted succesfully";
            header("location: ../index.php?page=list_`genre`");
        }else {
            die(mysqli_error($koneksi));
        }
    }
?>