<?php
    include("../koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>halaman-index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo"><a href="#">AIL ID Film</a></div>
            <ul class="links">
                <li><a href="hero">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="services">Film</a></li>
                <li><a href="contact">Genre</a></li>
                <li><a><?php echo $_SESSION['username']; ?></a></li>
            </ul>
            <a href="#" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="hero">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="#" class="action_btn">Get Started</a></li>
        </div>
    </header>

    <h1 align="center">AIL.ID </h1>
    <h2 align="center">DATA USER</h2></br>
        <h2>
            
        </h2>
        <a href="../logout.php">Logout</a>
        <script>
        const toggleBtn = document.querySelector('.togle_btn')
        const toggleBtnIcon = document.querySelector('toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function(){
            dropDownMenu.classList.toggle.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid faxmark'
            : 'fa-solid fa-bars'
        }
        
    </script>
</body>
</html>