<?php
session_start();

require_once('connection.php');
$id=$_GET['id'];
echo $id;


$sql="UPDATE `passport_request` SET `req_status`='Issued' WHERE `req_id`='$id'";
$qry=mysqli_query($conn,$sql);

if (!$qry) {
    die(mysqli_error($conn));
}
else
{
    $date= date('Y');
    $sql="UPDATE `passport` SET `pass_status`='Issued',`Issue_year`='$date' WHERE `application`='$id'";
    $qry=mysqli_query($conn,$sql);
    
    if (!$sql) {
        die(mysqli_error($conn));
    }
    else{
        header('Location:../issuedPassports.php?issued');
    }

}

?>
