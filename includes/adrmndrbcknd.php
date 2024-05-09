<?php

if(isset($_REQUEST['adrmndr']))
{   

    include 'dbh.php';
    session_start();
    $genre = $_REQUEST['genre'];
    $note = $_REQUEST['note'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];

    $toWrite = $genre."$".$date."$".$time."$".$note;
    $toWriteFile = "info/user-info/reminder/".$_SESSION['password']."rmndr".$_SESSION['id'].".txt";

    file_put_contents("../".$toWriteFile,"\n".$toWrite,FILE_APPEND);

    $redirect = "Location:../adrmndr.php";
       header($redirect);

}
?>