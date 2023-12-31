<?php
    include("koneksi.php");
    session_start();
    if(isset($_POST['submit_user'])) {
        $username = $_POST['usernameuser'];
        $password = $_POST['passworduser'];

        $query_user = "SELECT * FROM user WHERE username='$username'";
        $result_user = mysqli_query($koneksi, $query_user);

        if($result_user > 0){
            $user = mysqli_fetch_assoc($result_user);
            $storedusername = $user['username'];
            $storedpassword = $user['password'];

            if($username == $storedusername && $password == $storedpassword){
                if($user['level']=="user"){
                    $_SESSION['idakun'] = $user['idakun'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['gender'] = $user['gender'];
                    $_SESSION['tanggal_lahir'] = $user['tanggal_lahir'];
                    $_SESSION['alamat'] = $user['alamat'];
                    header("Location: user/index.php");
                    exit();
                }else if($user['level']=="admin"){
                    $_SESSION['idakun'] = $user['idakun'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['password'] = $user['password'];
                    $_SESSION['gender'] = $user['gender'];
                    $_SESSION['tanggal_lahir'] = $user['tanggal_lahir'];
                    $_SESSION['alamat'] = $user['alamat'];
                    header("location:admin/index.php");
                    exit();
                }else{
                    echo "<script>alert('salah!')</script>";   
                }
            }else{
                echo "<script>alert('password salah!')</script>";    
            }
        }else{
            echo "<script>alert('username tidak ditemukan!')</script>";  
        }
        
    } else if(isset($_POST['submit_supplier'])) {
        $username = $_POST['usernamesup'];
        $password = $_POST['passwordsup'];

        $query_supplier = "SELECT * FROM supplier WHERE username='$username'";
        $result_supplier = mysqli_query($koneksi, $query_supplier);

        if ($result_supplier > 0) {
            $supplier = mysqli_fetch_assoc($result_supplier);
            $storedusername = $supplier['username'];
            $storedpassword = $supplier['password'];

            if($username == $storedusername && $password == $storedpassword){
                $_SESSION['idsupplier'] = $supplier['idsupplier'];
                $_SESSION['username'] = $supplier['username'];
                $_SESSION['password'] = $supplier['password'];
                header("Location: supplier/index.php");
                exit();
            }else{
                echo "<script>alert('password salah!')</script>";
            }
        }else{
            echo "<script>alert('username tidak ditemukan!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Login</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up">
        <form action="login.php" method="post">
            <h1>Akun Supplier</h1>
            <span>masuk menggunakan akun supplier</span>
            <input type="text" name="usernamesup" placeholder="Username">
            <input type="password" name="passwordsup" placeholder="Password">
            <a href="register.php">Belum punya akun?</a>
            <button id="submit" name="submit_supplier">Sign In</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="login.php" method="post">
            <h1>Akun User</h1>
            <span>masuk menggunakan akun user</span>
            <input type="text" name="usernameuser" placeholder="Username">
            <input type="password" name="passworduser" placeholder="Password">
            <a href="register.php">Belum punya akun?</a>
            <button id="submit" name="submit_user">Sign In</button>
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
                <h1>Hello, Friend!</h1>
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