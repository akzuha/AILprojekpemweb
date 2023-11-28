<?php
    include("koneksi.php");

    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
    
        $query = "SELECT * FROM user WHERE idakun='$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['submit'])){
        $idakun=$_POST['idakun'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        
        $query = " UPDATE user SET idakun='$idakun', username='$username', password='$password', gender='$gender', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE idakun='$idakun'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                echo "edit succesfully";
                header("Location: ../index.php?page=list_user");
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
    <h1 align="center">Edit Content Data</h1>
    <a href="?page=list_content"></a><h1 align="center">Back</h1>
    <form action="update.php" method="POST">
        <table align="center">
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?php if(isset($_GET['updateid'])){echo $data['username'];} ?>"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value="<?php if(isset($_GET['updateid'])){echo $data['password'];} ?>"></td>
            </tr>
            <tr>
                <td>gender</td>
                <td><select name="gender" id="gender" value="">
                    <?php 
                    if(isset($_GET['updateid'])){
                        if($data['gender'] == "laki-laki"){
                            echo "<option value='laki-laki' selected> laki-laki </option>";
                            echo "<option value='perempuan'> perempuan </option>";
                        }elseif($data['gender'] == "perempuan"){
                            echo "<option value='laki-laki'> laki-laki </option>";
                            echo "<option value='perempuan' selected> perempuan </option>";
                        }
                    }else{
                        echo "<option value='laki-laki'> laki-laki </option>";
                        echo "<option value='perempuan'> perempuan </option>";
                    }
                    ?>                    
                </select>
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?php if(isset($_GET['updateid'])){echo $data['tanggal_lahir'];} ?>"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="5"><?php if(isset($_GET['updateid'])){echo $data['alamat'];}?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="idakun" value="<?php echo $idakun; ?>"></td>
                <td><input type="submit" name="submit" value="ubah!"></td>
            </tr>
        </table>
    </form>
</body>
</html>