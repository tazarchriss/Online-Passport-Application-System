<!-- This is the file for database configuration -->
<?php
    $server='127.0.0.1';
    $user='root';
    $password='';
    $database='topas';

    $conn=mysqli_connect($server,$user,$password,$database);

    if(!$conn){
        die(mysqli_error($conn));
    }

    ?>
