<?php
include "../koneksi.php";

$idfilmupdate = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $idfilm = $_POST["idfilm"];
    $namafilm = $_POST["namafilm"];
    $deskripsi = $_POST["deskripsi"];
    $cover = $_FILES["cover"]["name"];
    if ($cover != '') {
        $upload = 'images/' . $cover;
        move_uploaded_file($_FILES["cover"]["tmp_name"], $upload);
        $update = "UPDATE film set idfilm = '$idfilm', namafilm = '$namafilm', deskripsi='$deskripsi', cover='$cover' where idfilm='$idfilmupdate'";
    } else {
        $update = "UPDATE film set idfilm = '$idfilm', namafilm = '$namafilm', deskripsi='$deskripsi' where idfilm='$idfilmupdate'";
    }
    $result = mysqli_query($koneksi, $update);
    if($result){
        ?>
        <script>
            alert('edit sucessfull!');
            document.location = 'index.php?page=list_film';
        </script>";
        <?php
    }else{
        echo "failed" .mysqli_error($koneksi); 
    }
}
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from film where idfilm='$idfilmupdate'"));
if ($data['idfilm'] != "") {
    ?>
    <!--HTML-->
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='update' method='post' enctype='multipart/form-data'>
        <table align="center">
            <tr>
                <td>Film Name</td>
                <td>
                    <input type="text" name="namafilm" value="<?php echo $data['namafilm']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Film Description</td>
                <td>
                    <textarea name="deskripsi" cols="30" rows="10"><?php echo $data['deskripsi']; ?> </textarea>
                </td>
            </tr>
            <tr>
                <td>Film Cover</td>
                <td>
                    <img src="images/<?php echo $data['cover']; ?>" width="100" height="100"> <br>
                    <input type="file" name="cover" accept=".png, .jpg">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="idfilm" value="<?php echo $data['idfilm']; ?> ">
                    <input type="submit" name="submit" value="Edit Data Film">
                </td>
            </tr>
        </table>
    </form>
<?php 
}
?>
