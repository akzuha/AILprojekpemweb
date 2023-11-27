<?php 
include '../koneksi.php';
session_start();
?>

<?php 

include 'template/topmenu.php';
include 'template/sidemenu.php';

?>

<?php 
switch ($_GET['page']){
    default:
        include 'dashboard.php';
        break;
    case 'list_film';
        include 'list_film.php';
        break;
    case 'add_film';
        include 'add_film.php';
        break;
}
?>

<?php
include 'template/footer.php';
?>