

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
              <li class="breadcrumb-item active">Supplier</li>
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
                <h3 class="card-title">Supplier Data Table</h3></br>
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
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                    $query = "SELECT * FROM supplier";
                    $result = mysqli_query($koneksi,$query);

                    while($data_supplier = mysqli_fetch_assoc($result)){
                        $idsupplier = $data_supplier['idsupplier'];
                        $username = $data_supplier['username'];
                        $password = $data_supplier['password'];
                        echo '<tr>
                                <td>' .$idsupplier. '</td>
                                <td>' .$username. '</td>
                                <td>' .$password. '</td>
                                <td><a href="crud_supplier/update.php?updateid='.$idsupplier.'"> EDIT </a> | 
                                    <a href="crud_supplier/delete.php?deleteid='.$idsupplier.'"> DELETE </a>
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