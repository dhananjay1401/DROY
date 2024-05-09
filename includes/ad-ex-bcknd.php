<?php
if(isset($_REQUEST['adex']))
{
    $path = "../info/user-info/userfit/";
    session_start();
    $id = $_SESSION['id'];
    $path1 = $path.$id;
    if(!is_dir($path1))
    {
        //echo "N";
        mkdir($path1);

        mkdir($path1."/Exercise");
        mkdir($path1."/Fit");
        $listFile=$path1."/Exercise/list.txt";
        $myfile2 = fopen($listFile,"w") or die("Unable to write file");    
        fclose($myfile2);
    }
        
    $formatFile = $path1."/Exercise/format.txt";
    //make format file
    if(!is_file($formatFile))
    {
        $myfile = fopen($formatFile,"w") or die("Unable to write file");    
        fclose($myfile);
        
    }
    $exName = $_REQUEST['exname'];
    file_put_contents($formatFile,"\n".$exName,FILE_APPEND);

    header("Location:../functionmodes/mydata/exercise.php?Added");
}
if(isset($_REQUEST['updtex']))
{
    $path = "../info/user-info/userfit/";
    session_start();
    $id = $_SESSION['id'];
    $path1 = $path.$id."/Exercise/";
    //$pathFormatFile = $path1."format.txt";
    $t = date("h-i-s");
    //$newFile = $path1.$t.".txt";
    $listPath = $path1."list.txt";
    $dataNew = $t;
    $formatFile = $path1."format.txt";
    $dataFormat = file($formatFile);
    $lenFormat = count($dataFormat);
    $i=1;
    while($i<$lenFormat)
    {
        $fld = $_REQUEST[$dataFormat[$i]]."\b";
        //if(empty($fld))
        //{
          //  $fld=0;
        //}
        $dataNew.="$".$fld;
        $i++;
    }
    file_put_contents($listPath,"\n".$dataNew,FILE_APPEND);
}
?>