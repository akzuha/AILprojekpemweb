  <?php 
  
  $data_film = mysqli_query($koneksi,"SELECT * FROM film");
  $jumlah_film = mysqli_num_rows($data_film);

  $data_supplier = mysqli_query($koneksi,"SELECT * FROM supplier");

  ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jumlah_film; ?></h3>
                <p>Total Film</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="?page=list_film" class="small-box-footer"> More Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <p style="padding-left: 5px;">
              Supplier adalah sebuah user yang memiliki tujuan untuk menambahkan data film ke dalam websie AIL ID kami. Supplier selalu siap mengantar
              pesanan ke mana saja dan sudah terbukti terjamin aman!!
            </p>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->