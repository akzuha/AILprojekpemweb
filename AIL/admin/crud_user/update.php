<?php
    include("../../koneksi.php");

    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
    
        $query = "SELECT * FROM user WHERE idakun='$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idakun= $_POST['idakun'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $level = $_POST['level'];
        
        $query = " UPDATE user SET idakun='$idakun', username='$username', password='$password', gender='$gender', tanggal_lahir='$tanggal_lahir', alamat='$alamat', level='$level' WHERE idakun='$idakun'";
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
    <h1 align="center">mengubah data user</h1>
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
                        if($data['gender'] == "Laki-laki"){
                            echo "<option value='Laki-laki' selected> Laki-laki </option>";
                            echo "<option value='Perempuan'> Perempuan </option>";
                        }elseif($data['gender'] == "Perempuan"){
                            echo "<option value='Laki-laki'> Laki-laki </option>";
                            echo "<option value='Perempuan' selected> Perempuan </option>";
                        }
                    }else{
                        echo "<option value='Laki-laki'> Laki-laki </option>";
                        echo "<option value='Perempuan'> Perempuan </option>";
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
                <td>Level</td>
                <td><select name="level" id="level" value="">
                    <?php 
                    if(isset($_GET['updateid'])){
                        if($data['level'] == "admin"){
                            echo "<option value='admin' selected> admin </option>";
                        }elseif($data['level'] == "user"){
                            echo "<option value='admin'> admin </option>";
                            echo "<option value='user' selected> user </option>";
                        }
                    }else{
                        echo "<option value='admin'> admin </option>";
                        echo "<option value='user'> user </option>";
                    }
                    ?>                    
                </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="idakun" value="<?php echo $idakun; ?>"></td>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>