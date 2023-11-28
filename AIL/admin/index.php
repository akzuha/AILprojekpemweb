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
    case 'list_content';
        include 'crud_content/list_content.php';
        break;
    case 'list_watch';
        include 'crud_watch/list_watch.php';
        break;
    case 'list_genre';
        include 'crud_content/list_content.php';
        break;
        case 'add_user';
        include 'crud_content/list_content.php';
        break;
}

?>

<?php
include 'template/footer.php';
?>