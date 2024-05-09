<?php

if(isset($_REQUEST['addlog']))
{   
    session_start();
    $uid = $_SESSION['id'];
    
    
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    //$url.= $_SERVER['HTTP_HOST'];       
    // Append the requested resource location to the URL   
    $url= $_SERVER['REQUEST_URI'];    
      $data = explode("?",$url);
    $pgnm = $data['1'];  
    echo $pgnm;
    $pathToFormat = "../info/user-info/userlogs/".$uid."/".$pgnm."/";
    $pathToFormat1 = $pathToFormat."format.txt";
    echo "<bR>".$pathToFormat1;
    $dataFormat = file($pathToFormat1);
    $datalen = count($dataFormat);
    $j=1;
    //echo "<br>";
    //echo "<br>".($datalen-1);
    $logDataString="";
    while($j<$datalen)
    {
        //$a="0";
        $a = trim($_REQUEST[$dataFormat[$j]]);
        //echo $a."<br>";
        if(empty($a)||$a==null)
        {
            $a="0";
        }
        $z=0;
        if($z==1)
        {
            $file = $pathToFormat."logdata.txt";
            $logPAstData= file($file);
            $dataPastLen = count($logPAstData);
            //$dateCheck = 0;
            $lastEntry = $logPAstData[($dataPastLen-1)];
            $datatemp = explode("$",$lastEntry);
            $dateCheck = $datatemp[($datalen-1)];
            if(strcmp($dateCheck,date('d-m-Y')))
            {
                $zabs = $logPAstData[$datalen];
                $zabsj1 = explode("$",$zabs);
                $zabsj = $zabsj1[$j];
                if($zabsj=="0"||strcmp($zabsj,"0")==0)
                {
                    echo "flag";
                    $tj = intval($zabsj);
                    $a=$a+$tj;
                    $logDataString.="$".$a;
                }
            }            
        }
        $logDataString.="$".$a;
        $j++;
    }


    $t = date('d-m-Y');
    $logDataString = trim($logDataString,"$");
    $logDataString.="$".$t;
    echo "<br><br><br>".$logDataString;

    $pathToLogFile = $pathToFormat."logdata.txt";
    file_put_contents($pathToLogFile,"\n".$logDataString,FILE_APPEND);
    //fclose($pathToLogFile);
    echo "<br><br>done";
    
    //$newFileToWrite = $path."/".$title.".txt";
    //$myfile2 = fopen($newFileToWrite,"w") or die("Note Not Added");
    //file_put_contents($newFileToWrite,"\n".$note,FILE_APPEND);
    //fclose($newFileToWrite);
    

    //update list.txt
    //file_put_contents($filename,"\n".$title,FILE_APPEND);


    $headTo = "Location: ../logdata.php?".$pgnm;
    header($headTo);
}
?>
<?php

    ?>