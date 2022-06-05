<!-- This is the source code for admin navbar -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white bg-olive text-olive">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link text-light"><img src="logo.png" style="height:25px;"></a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- USER TYPE -->
      <li class="nav-item text-light">
        <a class="nav-link text-light"   href="index.html" role="button">
          <i class="fas fa-user-tie"></i>  <?php echo $_SESSION['lname'].' '.$_SESSION['fname']; ?>
        </a>
      </li>

    <!-- Logout button -->
      
      <li class="nav-item text-light">
        <a class="nav-link text-light"   href="configurations/logout.php" role="button">
          <i class="fas fa-power-off"></i> Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 " >


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="text-success">
        
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin <small> <i class="fa fa-circle text-success"> Active</i></small></a>
          
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard -->
            <li class="nav-item menu">
              <a href="admin.php" class="nav-link bg-olive">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  
                </p>
              </a>
         
            </li>

        <!-- Manage users -->
          <li class="nav-item menu">
            <a href="#" class="nav-link bg-olive">
              <i class="nav-icon fas fa-users   -alt"></i>
              <p>
                Manage Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="administrators.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administrators</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="allpolices.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Police</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="allcitizens.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Citizen </p>
                </a>
              </li>
            </ul>
          </li>
          <!--Manage Applications -->
          <li class="nav-item menu">
            <a href="#" class="nav-link bg-olive">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Manage Applications
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendingApplicattions.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Applications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="acceptedApplications.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted Applications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="declinedApplications.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Declined Applications </p>
                </a>
              </li>
            </ul>
          </li>
      <!-- Manage Passports  -->
      <li class="nav-item menu">
        <a href="#" class="nav-link bg-olive">
          <i class="nav-icon fas fa-file"></i>
          <p>
            Manage Passports
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="passports.html" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Ready Passports</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="issuedPassports.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Issued Passports</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reportedMIismatch.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Passport Mismatch</p>
            </a>
          </li>
        </ul>
      </li>
     <!-- System settings  -->
     <li class="nav-item menu">
      <a href="#" class="nav-link bg-olive">
        <i class="nav-icon fas fa-cog"></i>
        <p>
          System settings
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="./index.html" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Ready Passports</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./index2.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Issued Passports</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./index3.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Passport Mismatch</p>
          </a>
        </li>
      </ul>
    </li>
      <!-- view profile -->
      <li class="nav-item menu">
        <a href="profile.php" class="nav-link bg-olive">
          <i class="nav-icon fas fa-user-tie"></i>
          <p>
            Profile
       
          </p>
        </a>

      </li>
   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
