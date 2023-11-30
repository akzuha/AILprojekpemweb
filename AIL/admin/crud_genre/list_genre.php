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
              <li class="breadcrumb-item active">Genre</li>
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
                <h3 class="card-title">Genre Data Table</h3></br>
                <a href="index.php?page=add_genre"><h3 class="card-title">Add genre Data</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th> id genre </th>
                        <th> genre </th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                    $query = "SELECT * FROM `genre`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $idgenre = $data_user['idgenre'];
                        $genre = $data_user['genre'];
                        echo '<tr>
                                <td>' .$idgenre. '</td>
                                <td>' .$genre. '</td>
                                <td><a href="crud_genre/update.php?updateid='.$idgenre.'"> EDIT </a> | 
                                    <a href="crud_genre/delete.php?deleteid='.$idgenre.'"> DELETE </a>
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