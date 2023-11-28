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
            <td>Film ID</td>
            <td>
                <input type="text" name="idfilm">
            </td>
        </tr>
        <tr>
            <td>Film Name</td>
            <td>
                <input type="text" name="namafilm">
            </td>
        </tr>
        <tr>
            <td>Film Description</td>
            <td>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Film Cover</td>
            <td>
                <input type="file" name="foto" accept=".png, .jpg">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Add Film Data">
            </td>
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