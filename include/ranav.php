
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white bg-olive text-olive">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link text-light"><img src="logo.png" style="height:25px;"> Home</a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- USER TYPE -->
      <li class="nav-item text-light text-center">
        <a class="nav-link text-light"   href="ra.php" role="button">
          <i class="fas fa-user-tie"></i> 
          <?php echo $_SESSION['lname'].' '.$_SESSION['fname']; ?>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-1 d-flex">
          <a href="#" class=" p-1"> RA
            <small><i class="fa fa-circle text-success"> Active</i></small>  
          </a>
        
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
          <li class="nav-item menu">
            <a href="ra.php" class="nav-link bg-olive">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
       
          </li>
         <!-- Manage users -->
         <li class="nav-item menu">
          <a href="passportAdmins.php" class="nav-link bg-olive">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
                Passport Administrators
              
            </p>
          </a>

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
                <a href="pendingApplications.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clean Applications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="CriminalApplications.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criminal Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="AcceptedApplications.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted Applications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="DeclinedApplications.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Declined Applications </p>
                </a>
              </li>
            </ul>
          </li>
      <!-- View Issued Passports  -->
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
            <a href="CreatedPassports.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Created Passports</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="issuedPassports.php" class="nav-link">
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
        <a href="#" class="nav-link bg-olive">
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
