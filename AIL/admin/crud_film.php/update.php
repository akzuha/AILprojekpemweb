<?php
    include("../../koneksi.php");

    if(isset($_GET['updateid'])){
        $idwatch=$_GET['updateid'];
    
        $query = "SELECT * FROM film WHERE idfilm='$idfilm'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idfilm = $data_user['idfilm'];
        $namafilm = $data_user['namafilm'];
        $deskripsi = $data_user['deskripsi'];
        $cover = $data_user['cover'];
        
        $query = " UPDATE film SET idfilm='$idfilm', namafilm='$namafilm', deskripsi='$deskripsi', cover='$cover', idsupplier='$idsupplier' WHERE idfilm='$idfilm'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                ?>
                <script>
                    alert('edit sucessfull!');
                    document.location = '../index.php?page=list_film';
                </script>";
                <?php
            }else{
                echo "failed" .mysqli_error($koneksi); 
            }
        }   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update film</title>
</head>
<body>
    <h1>Edit film Data</h1>
    <a href="../index.php?page=list_film"><h3>Back</h3></a>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>idfilm</td>
                <td><input type="text" name="idfilm" value="<?php if(isset($_GET['updateid'])){echo $data['idfilm'];} ?>"></td>
            </tr>
            <tr>
                <td>namafilm</td>
                <td><input type="text" name="namafilm" value="<?php if(isset($_GET['updateid'])){echo $data['namafilm'];} ?>"></td>
            </tr>
            <tr>
                <td>deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?php if(isset($_GET['updateid'])){echo $data['deskripsi'];} ?>"></td>
            </tr>
            <tr>
                <td>cover</td>
                <td><input type="text" name="cover" value="<?php if(isset($_GET['updateid'])){echo $data['cover'];} ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>