

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
                <h3 class="card-title">film Data Table</h3></br>
                <a href="crud_film/add_film.php"><h3 class="card-title">Add film Data</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th> idfilm </th>
                        <th> namafilm </th>
                        <th> deskripsi </th>
                        <th> cover </th>
                        <th> idsupplier </th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                    $idsupplier = $_SESSION['idsupplier'];
                    $query = "SELECT * FROM `film`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $idfilm = $data_user['idfilm'];
                        $namafilm = $data_user['namafilm'];
                        $deskripsi = $data_user['deskripsi'];
                        $cover = $data_user['cover'];
                        echo '<tr>
                                <td>' .$idfilm. '</td>
                                <td>' .$namafilm. '</td>
                                <td>' .$deskripsi. '</td>
                                <td>' .$cover. '</td>
                                <td><a href="crud_user/update.php?updateid='.$idfilm.'"> EDIT </a> | 
                                    <a href="crud_user/delete.php?deleteid='.$idfilm.'"> DELETE </a>
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