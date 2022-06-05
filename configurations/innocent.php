<?php
session_start();

require_once('connection.php');
$id=$_GET['id'];
echo $id;


$sql="UPDATE `passport_request` SET `req_status`='clean' WHERE `req_id`='$id'";
$qry=mysqli_query($conn,$sql);

if (!$qry) {
    die(mysqli_error($conn));
}
else
{
 header('Location:../s_reports.php?submitted');
}

?>
