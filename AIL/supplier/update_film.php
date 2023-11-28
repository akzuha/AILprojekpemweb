<?php
<<<<<<< Updated upstream
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
        $update = "UPDATE film set idfilm = '$idfilm', namafilm = '$namafilm', deskripsi='$deskripsi', cover='$upload' where idfilm='$idfilmupdate'";
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
=======
include "koneksi.php";


$query = "SELECT * FROM `film`";
$result = mysqli_query($koneksi, $query);
$data = fetch_arrow_assoc($result);

$idsupplier = $_SESSION['idsupplier'];
if (isset($_POST['update'])) {
    $idfilm = $_POST["idfilm"];
    $namafilm = $_POST["namafilm"];
    $deskripsi = $_POST["deskripsi"];
    $cover = $_POST["cover"];
    $idsupplier = $_POST["idsupplier"];
    
    $query = "INSERT INTO film(idfilm, namafilm, deskripsi, cover, idsupplier) VALUES ('$idfilm','$namafilm','$deskripsi','$cover','$idsupplier')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        header("Location: listfilm.php");
        exit;
    }else {
        echo "gagal Menambahkan user";
        }
    }
>>>>>>> Stashed changes
    ?>
    <!--HTML-->
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='update' method='post' enctype='multipart/form-data'>
        <table align="center">
            <tr>
<<<<<<< Updated upstream
                <td>Film Name</td>
                <td>
                    <input type="text" name="namafilm" value="<?php echo $data['namafilm']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Film Description</td>
                <td>
                    <textarea name="alamat" id="cover" cols="30" rows="10"><?php echo $data['deskripsi']; ?> </textarea>
                </td>
            </tr>
            <tr>
                <td>Film Cover</td>
                <td>
                    <input type="file" name="namafilm" value="<?php echo $data['namafilm']; ?>" accept=".png, .jpg">
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
=======
                <td>id film</td>
                <td>
                    <input type="text" name="idfilm" value="<?php echo $data['idfilm']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Nama film</td>
                <td>
                    <input type="text" name="namafilm" value="<?php echo $data['namafilm']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>
                    <input type="date" name="deskripsi" value="<?php echo $data['deskripsi']; ?>">
                </td>
            </tr>
            <tr>
                <td>cover</td>
                <td>
                    <textarea name="alamat" id="cover" cols="30" rows="10"><?php echo $data['cover']; ?> </textarea>
                </td>
            </tr>
            <tr>
                    <input type="submit" name="idsupplier" value="Ubah Data film">
                </td>
            </tr>
        </table>
    </form>
>>>>>>> Stashed changes
