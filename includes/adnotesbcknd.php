<?php

if(isset($_REQUEST['adnote']))
{   
    session_start();
    $uid = $_SESSION['id'];
    $title = $_REQUEST['title'];
    $note = $_REQUEST['note'];
    if(empty($title))
    {
        $title = uniqid();
    }
    //echo $catName."<br><br>";
    $path = "../info/user-info/usernotes"."/".$uid;
    //echo $path;

    if(!is_dir($path))
    {
        mkdir($path);
    }
    
    //mkdir($path."/".$catName);
    //$file2 = $path."/".$catName."/format.txt";
    //$myfile1 = fopen($file2,"w") or die("Unable to write file");    
    //fclose($myfile1);
    //---j
    $filename = $path."/list.txt";

    if(!is_file($filename))
    {
        $myfile = fopen($filename,"w") or die("Unable to write file");
        fclose($myfile);
    }    

    $newFileToWrite = $path."/".$title.".txt";
    $myfile2 = fopen($newFileToWrite,"w") or die("Note Not Added");
    file_put_contents($newFileToWrite,"\n".$note,FILE_APPEND);
    fclose($newFileToWrite);
    

    //update list.txt
    file_put_contents($filename,"\n".$title,FILE_APPEND);


    $headTo = "Location: ../addnote.php";
    header($headTo);

}
?>
