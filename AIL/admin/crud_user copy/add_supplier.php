<?php 
include('../../koneksi.php');

if(isset($_POST['submit'])){
    $idsupplier = $_POST['idsupplier'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "INSERT INTO supplier (idsupplier, username, password) VALUES ('$idsupplier', '$username', '$password')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        ?><script>
        alert('user Berhasil Ditambahkan!');
        document.location = 'index.php?page=list_supplier';
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
            <h1 align="center">ADD Supplier</h1>
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
                <h3 class="card-title">Form To Add Supplier</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
          <table align="center">
            <tr>
                <td>ID Account</td>
                <td><input type="text" name="idsupplier" value=""></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value=""></td>
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