<!-- This is the page for applicant navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light bg-olive text-light" style="width:1020;">
    <!-- Left navbar links -->
    <h5>
       
        <a href="index3.html" class="nav-link text-light text-bold"> <img src="logo.png" style="height:20px;"> TOPAS</a>
    </h5>
    <ul class="navbar-nav text-light">
     
   
      <li class="nav-item d-none d-sm-inline-block">
        <a href="applicant.php" class="nav-link text-light">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="passportapplication.php" class="nav-link text-light">Passport Application</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="request_status.php" class="nav-link text-light">Application Status</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

  
      <li class="nav-item">
        <a class="nav-link text-light" href="#" >
         <i class="fas fa-user"> <?php echo $_SESSION['lname'].' '.$_SESSION['fname']; ?> </i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="configurations/logout.php">
          <i class="fas fa-power-off"> Log Out</i>
        </a>
      </li>
    </ul>
  </nav>
