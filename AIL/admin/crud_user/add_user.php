<?php 
include('../../koneksi.php');

if(isset($_POST['submit'])){
    $idakun = $_POST['idakun'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $level = $_POST['level'];


    $query = "INSERT INTO user (idakun, username, password, gender, tanggal_lahir, alamat, level) VALUES ('$idakun', '$username', '$password', '$gender', '$tanggal_lahir', '$alamat', '$level')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        ?><script>
        alert('user Berhasil Ditambahkan!');
        document.location = 'index.php?page=list_user';
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
            <h1 align="center">ADD USER</h1>
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
                <h3 class="card-title">Form To Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
          <table align="center">
            <tr>
                <td>ID Account</td>
                <td><input type="text" name="idakun" value=""></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value=""></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><select name="gender" id="gender" value="">
                  <option value='Laki-laki'> Laki-laki </option>
                  <option value='Perempuan'> Perempuan </option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Birthdate</td>
                <td><input type="date" name="tanggal_lahir" value=""></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level" id="level" value="">
                  <option value='admin'> admin </option>
                  <option value='user'> user </option>  
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="tambahkan"></td>
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