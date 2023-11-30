

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Data Table</h3></br>
                <a href="?page=add_user"><h3 class="card-title"></h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th> ID </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Gender </th>
                        <th> Tanggal lahir </th>
                        <th> Alamat </th>
                        <th> Level </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                    $query = "SELECT * FROM `user`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $idakun = $data_user['idakun'];
                        $username = $data_user['username'];
                        $password = $data_user['password'];
                        $gender = $data_user['gender'];
                        $tanggal_lahir = $data_user['tanggal_lahir'];
                        $alamat = $data_user['alamat'];
                        $level = $data_user['level'];
                        echo '<tr>
                                <td>' .$idakun. '</td>
                                <td>' .$username. '</td>
                                <td>' .$password. '</td>
                                <td>' .$gender. '</td>
                                <td>' .$tanggal_lahir. '</td>
                                <td>' .$alamat. '</td>
                                <td>' .$level. '</td>
                                <td><a href="crud_user/update.php?updateid='.$idakun.'"> EDIT </a> | 
                                    <a href="crud_user/delete.php?deleteid='.$idakun.'"> DELETE </a>
                                </td>
                              </tr>';
                    }
                ?>  
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>