<?php 
include '../koneksi.php';
session_start();
?>

<?php 

include 'template/topmenu.php';
include 'template/sidemenu.php';
include 'dashboard.php';

?>

<?php
switch ($_GET['page']){
    default:
        include 'dashboard.php';
        break;
    case 'list_film';
        include 'crud_user/list_user.php';
        break;
    case 'add_film';
        include 'crud_user/add_user.php';
        break;
}
?>

<?php
include 'template/footer.php';
?>