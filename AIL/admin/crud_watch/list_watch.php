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
                <h3 class="card-title">Content Data Table</h3></br>
                <a href="?page=add_user"><h3 class="card-title">Add content Data</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dt-buttons btn-group flex-wrap">               
                      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>Copy</span>
                      </button> 
                      <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>CSV</span>
                      </button> 
                      <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>Excel</span>
                      </button> 
                      <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>PDF</span>
                      </button> 
                      <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                        <span>Print</span>
                      </button> 
                      <div class="btn-group">
                        <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false">
                          <span>Column visibility</span>
                          <span class="dt-down-arrow"></span>
                        </button>
                      </div> 
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">
                    <label>Search:
                      <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                    </div>
                  </div>
                </div>


                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th> id menonton </th>
                        <th> waktu </th>
                        <th> id film </th>
                        <th> idfilm </th>
                        <th> iduser </th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                    session_start();
                    $idfilm = $_SESSION['idfilm'];
                    $iduser = $_SESSION['iduser'];
                    $query = "SELECT * FROM `menonton`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $idmenonton = $data_user['idmenonton'];
                        $waktu = $data_user['waktu'];
                        $idfilm = $data_user['idfilm'];
                        $iduser = $data_user['iduser'];
                        echo '<tr>
                                <td>' .$idmenonton. '</td>
                                <td>' .$waktu. '</td>
                                <td>' .$idfilm. '</td>
                                <td>' .$iduser. '</td>
                                <td><a href="crud_user/update.php?updateid='.$idmenonton.'"> EDIT </a> | 
                                    <a href="crud_user/delete.php?deleteid='.$idmenonton.'"> DELETE </a>
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