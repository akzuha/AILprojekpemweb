<?php
    include("../../koneksi.php");

    if(isset($_GET['updateid'])){
        $idwatch=$_GET['updateid'];
    
        $query = "SELECT * FROM user WHERE idwatch='$watch'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idwatch = $data_user['idwatch'];
        $waktu = $data_user['waktu'];
        // $idfilm = $data_user['idfilm'];
        // $idakun = $data_user['idakun'];
        
        $query = " UPDATE watch SET idwatch='$idwatch', waktu='$waktu', idfilm='$idfilm' WHERE idwatch='$idwatch'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                ?>
                <script>
                    alert('edit sucessfull!');
                    document.location = '../index.php?page=list_user';
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
    <title>Update User</title>
</head>
<body>
    <h1>Edit watch Data</h1>
    <a href="../index.php?page=list_user"><h3>Back</h3></a>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>idwatch</td>
                <td><input type="text" name="idwatch" value="<?php if(isset($_GET['updateid'])){echo $data['idwatch'];} ?>"></td>
            </tr>
            <tr>
                <td>waktu</td>
                <td><input type="text" name="waktu" value="<?php if(isset($_GET['updateid'])){echo $data['waktu'];} ?>"></td>
            </tr>
            <tr>
                <td>idfilm</td>
                <td><input type="text" name="idfilm" value="<?php if(isset($_GET['updateid'])){echo $data['idfilm'];} ?>"></td>
            </tr>
            <tr>
                <td>idakun</td>
                <td><input type="text" name="idakun" value="<?php if(isset($_GET['updateid'])){echo $data['idakun'];} ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>