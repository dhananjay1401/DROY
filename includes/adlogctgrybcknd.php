<?php

if(isset($_REQUEST['adctgry']))
{   
    session_start();
    $uid = $_SESSION['id'];
    $catName = $_REQUEST['genre'];
    //echo $catName."<br><br>";
    $path = "../info/user-info/userlogs"."/".$uid;
    //echo $path;

    if(!is_dir($path))
    {
        mkdir($path);
    }
    
    mkdir($path."/".$catName);
    
    $file2 = $path."/".$catName."/format.txt";
    $file3 = $path."/".$catName."/logdata.txt";

    $myfile2 = fopen($file2,"w") or die("Unable to write file");    
    fclose($myfile2);

    $myfile3 = fopen($file3,"w") or die("Unable to write file");    
    fclose($myfile3);
    //---j

    $filename = $path."/list.txt";

    if(!is_file($filename))
    {
        $myfile = fopen($filename,"w") or die("Unable to write file");
        fclose($myfile);
    }    

    //update list.txt
    file_put_contents($path."/list.txt","\n".$catName,FILE_APPEND);


    $headTo = "Location: ../logger.php";
    header($headTo);

}
?>
