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
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">Film Data Tables</h3> </br>
                <h3 class="card-title"><a href="?page=add_film">Add Film</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Film ID</th>
                    <th>Film Name</th>
                    <th>Genre</th>
                    <th>Film Description</th>
                    <th>Film Cover</th>
                    <th>Supplier Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $query = "SELECT film.idfilm, film.namafilm, film.deskripsi, film.cover, film.idsupplier, supplier.username, genre.genre FROM film JOIN supplier ON film.idsupplier = supplier.idsupplier JOIN genre ON film.idgenre = genre.idgenre";
                    $result = mysqli_query($koneksi,$query);

                    while($data_film = mysqli_fetch_assoc($result)){
                        echo "
                          <tr>
                              <td width='75'>$data_film[idfilm]</td>
                              <td>$data_film[namafilm]</td>
                              <td width='90'>$data_film[genre]</td>
                              <td width='510'>$data_film[deskripsi]</td>
                              <td><img src='crud_film/images/$data_film[cover]' width='100' height='100'></td>
                              <td>$data_film[username]</td>
                              <td>
                              <a href='crud_film/update_film.php?updateid=$data_film[idfilm]'> EDIT </a> ||
                              <a href='crud_film/delete_film.php?deleteid=$data_film[idfilm]'> DELETE </a>
                              </td>
                          </tr>
                          ";
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