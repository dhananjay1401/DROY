<?php
if(isset($_REQUEST['adtodo']))
{
    session_start();
    $task = $_REQUEST['task'];

    if(empty($_REQUEST['date']))
    {
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("14 days"));
        $dedln = date_format($date,"d-m-Y");
        
    }
    else{
        $dedln = $_REQUEST['date'];
        $dedln = date('d-m-Y',strtotime($dedln));
    }

    $date = $dedln;
    
    $toWriteFile = "info/user-info/todo/".$_SESSION['password']."task".$_SESSION['id'].".txt";

    file_put_contents("../".$toWriteFile,"",FILE_APPEND);


    $datas = file("../".$toWriteFile);
    $count = count($datas);  
    
    $last = $datas[$count-1];
    $lasttask = explode("$",$last);
    $lastTid = $lasttask[0];
    $coun = $lastTid+1;
    if($count==0 && $count == 1)
    {
        $coun = 1;
        $toWrite = $coun."$".$task."$".$date;
        file_put_contents("../".$toWriteFile,"\n".$toWrite,FILE_APPEND);
    }
    else
    {
        $toWrite = $coun."$".$task."$".$date;
        file_put_contents("../".$toWriteFile,"\n".$toWrite,FILE_APPEND);
    }

    $redirect = "Location:../addtodo.php?Todo_Added_Successfully";
    header($redirect);
}
elseif(isset($_REQUEST['remtodo']))
{
    $tid = $_REQUEST['taskId'];
    session_start();
    $toWriteFile = "info/user-info/todo/".$_SESSION['password']."task".$_SESSION['id'].".txt";

    $data = file("../".$toWriteFile);
    $len = count($data);
    $newData = "";
    $i = 1;
    $target = 0;
    while($i < $len)
    {
        $t = $data[$i];
        $r = explode("$",$t);
        if($tid == $r[0])
        {
            $target = $i;
        }
        $i++;
    }
    $i=0;
    while($i < $target)
    {
        $line = $data[$i];
        $newData = $newData."".$line;
        $i++;
    }
    $i++;
    while($i<$len)
    {
        $line = $data[$i];
        $newData = $newData."".$line;
        $i++;
    }
    unlink("../".$toWriteFile);
    file_put_contents("../".$toWriteFile,"",FILE_APPEND);
    file_put_contents("../".$toWriteFile,$newData,FILE_APPEND);
    $redirect = "Location:../addtodo.php?Todo_Removed_Successfully";
    header($redirect);
}
elseif(isset($_REQUEST['remtodo2']))
{
    $tid = $_REQUEST['taskId'];
    session_start();
    $toWriteFile = "info/user-info/todo/".$_SESSION['password']."task".$_SESSION['id'].".txt";

    $data = file("../".$toWriteFile);
    $len = count($data);
    $newData = "";
    $i = 1;
    $target = 0;
    while($i < $len)
    {
        $t = $data[$i];
        $r = explode("$",$t);
        if($tid == $r[0])
        {
            $target = $i;
        }
        $i++;
    }
    $i=0;
    while($i < $target)
    {
        $line = $data[$i];
        $newData = $newData."".$line;
        $i++;
    }
    $i++;
    while($i<$len)
    {
        $line = $data[$i];
        $newData = $newData."".$line;
        $i++;
    }
    unlink("../".$toWriteFile);
    file_put_contents("../".$toWriteFile,"",FILE_APPEND);
    file_put_contents("../".$toWriteFile,$newData,FILE_APPEND);
    $redirect = "Location:../home.php?Todo_Removed_Successfully";
    header($redirect);
}
else header("Location:../home.php");
?>