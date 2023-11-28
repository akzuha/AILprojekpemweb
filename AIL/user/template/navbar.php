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
<div class="wrapper">
<div class="navbar">
            <div class="logo"><a href="#">AIL ID Film</a></div>
            <ul class="links">
                <li><a href="?page=home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="?page=film.php">Film</a></li>
                <li><a href="?page=genre.php">Genre</a></li>
                <li><a><?php echo $_SESSION['username']; ?></a></li>
            </ul>
            <a href="../logout.php" class="action_btn"><i class="fa-solid fa-power-off"></i></a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="?page=home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="?page=film.php">Film</a></li>
            <li><a href="?page=genre.php">Genre</a></li>
            <li><a href="#" class="action_btn">Get Started</a></li>
</div>