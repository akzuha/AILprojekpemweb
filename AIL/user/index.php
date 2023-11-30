<?php
    include("../koneksi.php");
    session_start();
?>

<?php 
switch ($_GET['page']){
    default:
        include 'template/navbar.php';
        include 'home.php';
        break;
    case 'genre';
        include 'template/navbar2.php';
        include 'genre.php';
        break;
    case 'film';
        include 'template/navbar2.php';
        include 'film.php';
        break;
    case 'Sang%20Pemimpi';
        include 'sangpempimpi.php';
        break;
}
?>

<?php
include 'template/footer.php';
?>