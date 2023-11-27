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
            <form action="index.php" method="GET">
                <table align="center" border="">
                    <tr>
                        <th> id </th>
                        <th> username </th>
                        <th> password </th>
                        <th> gender </th>
                        <th> tanggal lahir </th>
                        <th> alamat </th>
                        <th> aksi </th>
                    </tr>
                <?php 
                    $query = "SELECT * FROM `user`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $idakun = $data_user['idakun'];
                        $username = $data_user['username'];
                        $password = $data_user['password'];
                        $gender = $data_user['gender'];
                        $tanggal_lahir = $data_user['tanggal_lahir'];
                        $alamat = $data_user['alamat'];
                        echo '<tr>
                                <td>' .$idakun. '</td>
                                <td>' .$username. '</td>
                                <td>' .$password. '</td>
                                <td>' .$gender. '</td>
                                <td>' .$tanggal_lahir. '</td>
                                <td>' .$alamat. '</td>
                                <td><a href="update.php?updateid='.$idakun.'"> UBAHHH </a> | 
                                    <a href="delete.php?deleteid='.$idakun.'"> HAPUSSS </a>
                                </td>
                              </tr>';
                    }
                ?>  
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="register.php"> Menambah data </a></td>
                    </tr>
                </table>
            </form>
        </h2>
        <a href="logout.php">Logout</a>
</body>
</html>