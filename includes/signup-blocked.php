<?php

if (isset($_REQUEST['signup-submit']))
{
    include_once 'dbh.php';

    $filename = "info/user-info/reminder/".$_REQUEST['pwd']."rmndr".$_REQUEST['number'].".txt";
    $filenam = "../".$filename;
    $myfile = fopen($filenam,"w") or die("Unable to open file");
    fclose($myfile);

    $sql = "INSERT INTO users(name,email,password,contact_number,rmndr) 
    VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['pwd']."', '".$_REQUEST['number']."', '".$filenam."')";
    mysqli_query($conn, $sql);   
    mysqli_close($conn);

    header("Location:../success.html");
    exit();
}
?>