<?php 

if(isset($_POST['submit'])){
  $idfilm = $data_user['idfilm'];
  $namafilm= $data_user['namafilm'];
  $deskripsi= $data_user['deskripsi'];
  $cover= $data_user['cover'];
  $idsupplier = $SESSION['idsupplier'];

  $query = "INSERT INTO film (idfilm, namafilm, deskripsi, deskripsi, cover, idsupplier ) VALUES ('$idfilm','$namafilm,'$deskripsi','$cover,'$idsupplier')";
  $result = mysqli_query($koneksi,$query);
  if($result){
      ?><script>
      alert('Film Berhasil Ditambahkan!');
      document.location = 'index.php?page=list_film';
      </script>
      <?php
  }else {
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
            <td>id film</td>
            <td>
                <input type="text" name="idwatch">
            </td>
        </tr>
        <tr>
            <td>nama film</td>
            <td>
                <input type="text" name="waktu">
            </td>
        </tr>
        <tr>
            <td>deskripsi</td>
            <td>
              <input type="text" name="idfilm">
            </td>
        </tr>
        <tr>
            <td>cover</td>
            <td>
                <input type="text" name="idakun">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Add watch data">
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
  /.content-wrapper