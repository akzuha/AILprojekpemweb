
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AIL - Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
              echo $_SESSION['username'];
            ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=list_user" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=list_supplier" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                Supplier
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=list_film" class="nav-link">
              <i class="nav-icon fas fa-solid fa-film"></i>
              <p>
                Data Film
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=list_watch" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Watch
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=list_genre" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Genre
              </p>
            </a>
          </li>
          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-terminal"></i>
              <p>Sign Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>