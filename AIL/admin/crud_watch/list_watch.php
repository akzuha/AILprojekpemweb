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
              <li class="breadcrumb-item active">Watch</li>
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
                <h3 class="card-title">Watch Data Table</h3></br>
                <a href="index.php?page=add_watch"><h3 class="card-title"></h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
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
                        <th> Film Name </th>
                        <th> Username </th>
                        <th> Last Watched </th>
                        <th> Duration </th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                    $query = "SELECT watch.idwatch, watch.lastwatch,  film.namafilm, user.username 
                    FROM watch 
                    JOIN film ON watch.idfilm = film.idfilm
                    JOIN user ON watch.idakun = user.idakun";
                    $result = mysqli_query($koneksi,$query);

                    while($data_watch = mysqli_fetch_assoc($result)){
                        $username = $data_watch['username'];
                        $namafilm = $data_watch['namafilm'];
                        $lastwatch = $data_watch['lastwatch'];
                        $durasi = $data_watch['durasi'];
                        echo '<tr>
                                <td>' .$data_watch['namafilm']. '</td>
                                <td>' .$data_watch['username']. '</td>
                                <td>' .$data_watch['waktu']. '</td>
                                <td><a href="crud_watch/update.php?updateid='.$idwatch.'"></a> | 
                                    <a href="crud_watch/delete.php?deleteid='.$idwatch.'"></a>
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