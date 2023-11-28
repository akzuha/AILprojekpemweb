<?php 
if(isset($_POST['submit'])){
    $idfilm = $_POST['idfilm'];
    $namafilm = $_POST['namafilm'];
    $cover = $_FILES['foto']['name'];
    if ($cover != '') {
        $upload = 'images/' . $foto;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
    }
    $idsupplier = $_SESSION['idsupplier'];

    $query = "INSERT INTO film (idfilm,namafilm,cover,idsupplier) VALUES ('$idfilm','$namafilm','$cover'.'$idsupplier')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        ?><script>
        alert('Film Berhasil Ditambahkan!');
        </script>
        <?php
    }
    header('location: index.php?page=list_film');
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
              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="idfilm">Film ID</label>
                    <input type="text" name="idfilm" class="form-control" id="idfilm" placeholder="Enter ID film">
                  </div>
                  <div class="form-group">
                    <label for="namafilm">Film Name</label>
                    <input type="text" name="namafilm" class="form-control" id="namafilm" placeholder="Enter film name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Film Cover</label>
                    <div class="input-group">
                        <input type="file" name="foto" class="custom-file-input" id="foto" accept=".png, .jpg">
                        <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
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