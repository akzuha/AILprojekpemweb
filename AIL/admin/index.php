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
    case 'list_user';
        include 'crud_user/list_user.php';
        break;
    case 'list_watch';
        include 'crud_watch/list_watch.php';
        break;
    case 'list_genre';
        include 'crud_genre/list_genre.php';
        break;
    case 'add_watch';
        include 'crud_watch/add_watch.php';
        break;
    case 'add_genre';
        include 'crud_genre/add_genre.php';
        break;
    case 'list_film';
        include 'crud_film/list_film.php';
        break;
}

?>

<?php
include 'template/footer.php';
?>