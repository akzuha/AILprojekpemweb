<?php
    include("koneksi.php");
    if(isset($_POST['submit_user'])){
        $idakun = $_POST['idakun'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $level = "user";

        $query = "INSERT INTO user(idakun,username,password,gender,tanggal_lahir,alamat,level) VALUES ('$idakun','$username','$password','$gender','$tanggal_lahir','$alamat','$level')";
        $result = mysqli_query($koneksi,$query);
        if($result){
            ?><script>
            alert('Anda Berhasil Register!');
            document.location = 'login.php';
            </script>
            <?php
        }
    }
    else if(isset($_POST['submit_supplier'])){
        $id = $_POST['idsupplier'];
        $username = $_POST['usernamesupplier'];
        $password = $_POST['password'];

        $query = "INSERT INTO supplier(idsupplier,username,password) VALUES ('$id','$username','$password')";
        $result = mysqli_query($koneksi,$query);
        if($result){
            ?><script>
            alert('Anda Berhasil Register!');
            document.location = 'login.php';
            </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Projek_ail</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up">
        <form action="" method="post">
            <h1 align="center">Buat Akun Supplier</h1>
            <span>buat akun supplier baru</span>
            <input type="text" name="idsupplier" placeholder="ID" maxlength="20">
            <input type="text" name="usernamesupplier" placeholder="Username" maxlength="20">
            <input type="password" name="password" placeholder="Password">
            <a href="login.php">Sudah punya akun?</a>
            <button id="submit_supplier" name="submit_supplier">Daftar</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="" method="post">
            <h1>Buat Akun User</h1>
            <span>buat akun user baru</span>
            <input type="text" name="idakun" placeholder="ID" maxlength="20">
            <input type="text" name="username" placeholder="Username" maxlength="20">
            <input type="password" name="password" placeholder="Password">
            <select name="gender" id="gender">
                <option value="0"> Jenis Kelamin : </option>
                <option value="Laki-laki"> Laki-Laki </option>
                <option value="Perempuan"> Perempuan </option>
            </select>
            <input type="date" name="tanggal_lahir">
            <input type="text" name="alamat" id="alamat" placeholder="Alamat">
            <a href="login.php">Sudah punya akun?</a>
            <button id="submit_user" name="submit_user">Daftar</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Masuk menggunakan akun pribadi anda dan nikmati menonton film sepuasnya!</p>
                <button class="hidden" id="login">User</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Supplier!</h1>
                <p>Masuk menggunakan akun supplier anda disini untuk menambahkan film sendiri!</p>
                <button class="hidden" id="register">Supplier</button>
            </div>
        </div>
    </div>        
</div>
    <script src="js/script.js"></script>
    <script src="js/alert.js"></script>
</body>
</html>