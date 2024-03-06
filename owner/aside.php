 <?php
  $con=mysqli_connect("localhost","root","","gym_project")or die("Database Error"); 
  $oname=mysqli_fetch_row(mysqli_query($con,"SELECT *  FROM gym_add_acc WHERE ID='".$_SESSION['owner']."'"))
 ?>
 <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">
          <i class="fas fa-home"></i>
        </a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item"
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
         </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="../logout.php">
          <i class="far fa-sign-out-alt">Logout</i>
        </a>
        
        
    </ul>
  </nav>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">The Muscle Studio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block"><?php echo $oname[1]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Member's Account
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_mem.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_mem.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Members</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item" style="background-color: green">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                  Members Attendance
                <i class="fas fa-angle-left right"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mem_attendance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mem_atd_view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                 Staff Account
                <i class="fas fa-angle-left right"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Account</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item" style="background-color: green">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                 Staff Attendance
                <i class="fas fa-angle-left right"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="stf_atd_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="stf_atd_view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Gym Facilities
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_facili.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Facilities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_facili.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Facilities</p>
                </a>
              </li>
            </ul>
          </li>
          
        


            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Gym Services
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_service.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_service.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Services</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dumbbell"></i>
              <p>
              Gym Equipments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_equip.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Equipments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_equip.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Equipments</p>
                </a>
              </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>