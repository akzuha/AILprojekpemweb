<?php 

if(isset($_POST['submit'])){
  $idgenre= $_POST['idgenre'];
  $genre = $_POST['genre'];

  $query = "INSERT INTO genre (idgenre,genre) VALUES ('$idgenre','$genre')";
  $result = mysqli_query($koneksi,$query);
  if($result){
      ?><script>
      alert('genre Berhasil Ditambahkan!');
      document.location = 'index.php?page=list_genre';
      </script>
      <?php
  }else {
    ?><script>
    alert('genre Berhasil Ditambahkan!');
    document.location = 'index.php?page=list_genre';
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
            <h1 align="center">ADD genre</h1>
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
                <h3 class="card-title">Form To Add genre</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
    <table align="center">
        <tr>
            <td>id genre</td>
            <td>
                <input type="text" name="idgenre">
            </td>
        </tr>
        <tr>
            <td>genre</td>
            <td>
                <input type="text" name="genre">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Add genreData">
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