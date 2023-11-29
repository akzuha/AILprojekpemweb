<?php 

if(isset($_POST['submit'])){
    $idfilm = $_POST['idfilm'];
    $namafilm = $_POST['namafilm'];
    $cover = $_FILES['foto']['name'];
    $description = $_POST['deskripsi'];
    if ($cover != '') {
        $upload = 'images/' . $cover;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
    }
    $idsupplier = $_SESSION['idsupplier'];

    $query = "INSERT INTO film (idfilm,namafilm,deskripsi,cover,idsupplier) VALUES ('$idfilm','$namafilm','$description','$cover','$idsupplier')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        ?><script>
        alert('Film Berhasil Ditambahkan!');
        document.location = 'index.php?page=list_film';
        </script>
        <?php
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 align="center">ADD FILM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form To Add Film</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
    <table align="center">
        <tr>
        <tr>
                <td>username</td>
                <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value=""></td>
            </tr>
            <tr>
                <td>gender</td>
                <td><select name="gender" id="gender" value="">
                    <?php 
                    if(isset($_GET['updateid'])){
                        if($data['gender'] == "Laki-laki"){
                            echo "<option value='Laki-laki' selected> Laki-laki </option>";
                            echo "<option value='Perempuan'> Perempuan </option>";
                        }elseif($data['gender'] == "Perempuan"){
                            echo "<option value='Laki-laki'> Laki-laki </option>";
                            echo "<option value='Perempuan' selected> Perempuan </option>";
                        }
                    }else{
                        echo "<option value='Laki-laki'> Laki-laki </option>";
                        echo "<option value='Perempuan'> Perempuan </option>";
                    }
                    ?>                    
                </select>
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td><input type="date" name="tanggal_lahir" value=""></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level" id="level" value="">
                    <?php 
                    if(isset($_GET['updateid'])){
                        if($data['level'] == "admin"){
                            "<option value='admin' selected> admin </option>";
                        }elseif($data['level'] == "user"){
                            echo "<option value='admin'> admin </option>";
                            echo "<option value='user' selected> user </option>";
                        }
                    }else{
                        echo "<option value='admin'> admin </option>";
                        echo "<option value='user'> user </option>";
                    }
                    ?>                    
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="edit"></td>
            </tr>
    </table>
</form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->