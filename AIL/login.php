<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
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
        <form action="cek_login.php" method="post">
            <h1>Akun Supplier</h1>
            <span>masuk menggunakan akun supplier</span>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <a href="register.php">Belum punya akun?</a>
            <button id="submit" name="submit_supplier">Sign In</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="cek_login.php" method="post">
            <h1>Akun User</h1>
            <span>masuk menggunakan akun user</span>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
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
    <script src="script.js"></script>
</body>
</html>