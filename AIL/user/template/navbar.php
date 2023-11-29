<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/website.css">
    <title>AIL ID</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="#">AIL ID</a>
            </div>
            <ul class="links">
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">Film</a></li>
                <li><a href="#services">Genre</a></li>
                <li><a href="#">Contact</a></li>
                <li><a><?php echo $_SESSION['username']; ?></a></li>
            </ul>
            <a href="../logout.php" class="action_btn"><i class="fa-solid fa-power-off"></i></a>
        </div>
    </header>