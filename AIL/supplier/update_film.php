<?php
include "koneksi.php";
$nipupdate = $_GET['nip'];
//query untuk update
if (isset($_POST['update'])) {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $divisi = $_POST["divisi"];
    $foto = $_FILES['foto']['name'];
    if ($foto != '') {
        $upload = 'images/' . $foto;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
        $update = "update pegawai set nip = '$nip', nama = '$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', divisi='$divisi', foto='$upload' where nip='$nipupdate'";
    } else {
        $update = "update pegawai set nip = '$nip', nama = '$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', divisi='$divisi' where nip='$nipupdate'";
    }
    $query = mysqli_query($conn, $update);
    if ($query) {
?>
        <!--HTML-->
        <script>
            alert('Data berhasil diubah!');
            document.location = 'view.php';
        </script>
    <?php
    }
}
$row = mysqli_fetch_array(mysqli_query($conn, "select * from pegawai where nip='$nipupdate'"));
if ($row['nip'] != "") {
    ?>
    <!--HTML-->
    <form action='<?php $_SERVER['PHP_SELF']; ?>' name='update' method='post' enctype='multipart/form-data'>
        <table align="center" border="1">
            <tr>
                <td>NIP</td>
                <td>
                    <input type="text" name="nip" value="<?php echo $row['nip']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $row['nama']; ?> ">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $row['alamat']; ?> </textarea>
                </td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td>
                    <select name="divisi" id="divisi" value="<?php echo $row['divisi']; ?>">
                        <option value="IT" <?php if ($row['divisi'] == 'IT') echo 'selected'; ?>>IT</option>
                        <option value="HRD" <?php if ($row['divisi'] == 'HRD') echo 'selected'; ?>>HRD</option>
                        <option value="UMUM" <?php if ($row['divisi'] == 'UMUM') echo 'selected'; ?>>Umum</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload Foto</td>
                <td>
                    <img src="<?php echo $row['foto']; ?>" width="100" height="100"> <br>
                    <input type="file" name="foto" accept=".png, .jpg">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="update" value="Ubah Data Pegawai">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>