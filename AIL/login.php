<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query_user = "SELECT * FROM user WHERE username=$username";
        $result_user = mysqli_query($koneksi, $query_user);

        $query_supplier = "SELECT * FROM supplier WHERE username=$username";
        $result_supplier = mysqli_query($koneksi, $query_supplier);

        if($result_user && mysqli_num_rows($result_user) > 0){
            $user = mysqli_fetch_assoc($result_user);
            $storedpassword = $user['password'];
            
            if(password_verify($password, $storedpassword)){
                session_start();
                $_SESSION['idakun'] = $user['idakun'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['gender'] = $user['gender'];
                $_SESSION['tanggal_lahir'] = $user['tanggal_lahir'];
                $_SESSION['alamat'] = $user['alamat'];
                header("Location: user_dashboard.php");
                exit;
            }else {
                echo "Kata sandi salah";
            }
        } elseif($result_supplier && mysqli_num_rows($result_supplier) > 0){
            $supplier = mysqli_fetch_assoc($result_supplier);
            $storedpassword = $supplier['password'];
            
            if(password_verify($password, $storedpassword)){
                session_start(); 
                $_SESSION['idsupplier'] = $supplier['idsupplier'];
                $_SESSION['username'] = $supplier['username'];
                header("Location: supplier_dashboard.php");
                exit;
            } else {
                echo "Kata sandi salah";
            }
        } else {
            ?><script>alert('Username Tidak Ditemukan! Coba isi ulang!')</script><?php
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Login</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up">
        <form action="login.php" method="post">
            <h1>Akun Supplier</h1>
            <span>masuk menggunakan akun supplier</span>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <a href="register.php">Belum punya akun?</a>
            <button id="submit" name="submit">Sign In</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="login.php" method="post">
            <h1>Akun User</h1>
            <span>masuk menggunakan akun user</span>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <a href="register.php">Belum punya akun?</a>
            <button id="submit" name="submit">Sign In</button>
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
    <script src="script.js"></script>
</body>
</html>