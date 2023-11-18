<?php
    include("koneksi.php");
    if(isset($_POST['submit_user'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO user(username,password,gender,tanggal_lahir,alamat) VALUES ('$username','$password','$gender','$tanggal_lahir','$alamat')";
        $result = mysqli_query($koneksi,$query);
        header("Location: login.php");
    }
    if(isset($_POST['submit_supplier'])){
        $id = $_POST['idsupplier'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO supplier(idsupplier,username,password) VALUES ('$id','$username','$password')";
        $result = mysqli_query($koneksi,$query);
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Projek_ail</title>
</head>
<body>
    <h1 align="center">MEMBUAT AKUN USER</h1>
    <h2>
        <form action="" method="POST" >
            <table align="center">
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td><select name="gender" id="gender">
                        <option value="Laki-laki"> laki-laki </option>
                        <option value="perempuan"> perempuan </option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>tanggal lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit_user" id="submit_user"></td>
                </tr>
            </table>
        </form>

    <br>

    <h1 align="center">MENAMBAHKAN AKUN SUPPLIER</h1>
    <h2>
        <form action="" method="POST" >
            <table align="center">
                <tr>
                    <td>id</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit_supplier" id="submit_supplier"></td>
                </tr>
            </table>
        </form>
    </h2>
</body>
</html>