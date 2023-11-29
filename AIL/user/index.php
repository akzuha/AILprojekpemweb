<?php
    include("../koneksi.php");
    session_start();
?>

<?php 

include 'template/navbar.php';

?>

<?php 
switch ($_GET['page']){
    default:
        include 'home.php';
        break;
    case 'genre';
        include 'genre.php';
        break;
    case 'film';
        include 'film.php';
        break;
    
}
?>

<?php
include 'template/footer.php';
?>