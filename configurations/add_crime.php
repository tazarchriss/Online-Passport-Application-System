<?php

require_once('connection.php');

if(isset($_POST['crime']))
{
    $nin=$_POST['nin'];
    $detail=$_POST['detail'];
    $level=$_POST['level'];
    $grade=$_POST['grade'];
    $region=$_POST['region'];

   

//    query preparation
    $qry="INSERT INTO `crime`(`nin`, `detail`, `level`, `grade`,`region`) 
    VALUES('$nin','$detail','$level','$grade','$region')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {
  
        header('location:../allcrimes.php?success');
      }
 
      }

      ?>
