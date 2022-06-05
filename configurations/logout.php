<!-- This is the file that performs the logout operation -->
<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['fname']);
    unset($_SESSION['mname']);
    unset($_SESSION['lname']);
    unset($_SESSION['role']);
    header('Location:../index.php');
    ?>
    
