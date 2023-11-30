<?php
    include("../../koneksi.php");

    if(isset($_GET['updateid'])){
        $idakun=$_GET['updateid'];
    
        $query = "SELECT * FROM user WHERE idakun='$idakun'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idakun= $_POST['idakun'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $level = $_POST['level'];
        
        $query = " UPDATE user SET idakun='$idakun', username='$username', gender='$gender', tanggal_lahir='$tanggal_lahir', alamat='$alamat', level='$level' WHERE idakun='$idakun'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                ?>
                <script>
                    alert('edit sucessfull!');
                    document.location = '../index.php?page=list_user';
                </script>
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
    <h1>Edit User Data</h1>
    <a href="../index.php?page=list_user"><h3>Back</h3></a>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>ID Account</td>
                <td><input type="text" name="idakun" value="<?php if(isset($_GET['updateid'])){echo $data['idakun'];} ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php if(isset($_GET['updateid'])){echo $data['username'];} ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="gender" value="">
                    <option value="Laki-laki" <?php echo ($data['gender'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo ($data['gender'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>                  
                </td>
            </tr>
            <tr>
                <td>Birthdate</td>
                <td><input type="date" name="tanggal_lahir" value="<?php if(isset($_GET['updateid'])){echo $data['tanggal_lahir'];} ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
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