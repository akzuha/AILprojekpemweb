<?php
include "../koneksi.php";

$idfilmupdate = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $namafilm = $_POST["namafilm"];
    $deskripsi = $_POST["deskripsi"];
    $cover = $_FILES["foto"]["name"];
    if ($cover != '') {

        //hapus gambar lama pda direktori yg bersangkutan
        $gambar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT cover from film where idfilm='$idfilmupdate'"));
        unlink("images/$gambar[cover]");
        unlink("../admin/crud_film/images/$gambar[cover]");

        //upload gambar yang baru setelah diinput
        $uploadsup = 'images/' . $cover;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadsup);
        $uploadadm = '../admin/crud_film/images/' . $cover;
        copy($uploadsup, $uploadadm);

        //update film dengan foto baru
        $update = "UPDATE film set idfilm = '$idfilmupdate', namafilm = '$namafilm', deskripsi='$deskripsi', cover='$cover' where idfilm='$idfilmupdate'";
    } else {
        //update film tanpa foto baru
        $update = "UPDATE film set idfilm = '$idfilmupdate', namafilm = '$namafilm', deskripsi='$deskripsi' where idfilm='$idfilmupdate'";
    }

    $result = mysqli_query($koneksi, $update);

    if($result){
        ?>
        <script>
            alert('edit sucessfull!');
            document.location = 'index.php?page=list_film';
        </script>
        <?php
    }else{
        echo "failed" .mysqli_error($koneksi); 
    }
}

//bagian form input updatean data
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from film where idfilm='$idfilmupdate'"));
if ($data['idfilm'] != "") {
    ?>
    <!--HTML-->
<!DOCTYPE html>
<html>
<head>
    <title>Update Film</title>
</head>
<body>
    <h1>Edit Film Data</h1>
    <a href="index.php?page=list_film"><h3>Back</h3></a>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='update' method='post' enctype='multipart/form-data'>
        <table>
            <tr>
                <td>Film Name</td>
                <td>
                    <input type="text" name="namafilm" value="<?php echo $data['namafilm']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <select name="genre" id="genre">
                        <?php
                            $genrename = mysqli_query($koneksi, "SELECT * FROM genre");
                            while ($data_genre = mysqli_fetch_assoc($genrename)) {
                                echo "<option value='" . $data_genre['idgenre'] . "'> " . $data_genre['genre'] . " </option>";
                            }
                        ?>
                    </select>                                  
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
                    <input type="file" name="foto" accept=".png, .jpg, .jpeg, .webp">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="idfilm" value="<?php echo $data['idfilm']; ?> ">
                    <input type="submit" name="submit" value="Edit Data Film">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
}
?>
