<?php

if(isset($_REQUEST['updateRel']))
{
    include_once 'dbh.php';
    session_start();
$nttid =$_REQUEST['nttid'];
$hid = $_SESSION['id'];
$emo = $_REQUEST['emo'];
$freq =$_REQUEST['freq'];
$lon = $_REQUEST['lon'];
$clo =$_REQUEST['clo'];

$sql="INSERT INTO entitytriangledata (nttID, hid, hclose, hlong, hfreq, hemo) VALUES ('".$nttid."',
'".$hid."','".$clo."','".$lon."','".$freq."','".$emo."')";
mysqli_query($conn,$sql) or die("UnSuccessful"); 
$redirectTo = "Location:../updatentt.php?Performed";
header($redirectTo);
}
?>