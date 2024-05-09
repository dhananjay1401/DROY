<?php 
function verifyDate($arg1,$duration)
{
$date = date('d-m-Y');
$date2 = $arg1;
$dura = $duration;
$row2 = explode("-",$date2);

/*if(isset($row2[0]))
{
    $row2[0] = 29;
}
if(isset($row2[1]))
{
    $row2[1] = 2;
}*/
//testcode
$date2 = $row2[0];
$month2 = $row2[1];

$row = date_parse($date);
$date = $row['day'];
$month = $row['month'];
                  
$extras = $month2-$month;
$date2 = $date2 + noOfDays($month)*$extras;
$diff = $date2 - $date;

if($diff<= $dura && $diff>=0)
{
    return 1;
}
return 0;
}

function getmyDate($arg)
{
    $input = $arg;
    $input = date("d-m-Y",$input);
    $data = explode("-",$input);
    $date = $data[0];
    return $date;
}
function getmyMonth($arg)
{
    $input = $arg;
    $input = date("d-m-Y",$input);
    $data = explode("-",$input);
    $month = $data[1];
    return $month;
}
function getmyYear($arg)
{
    $input = $arg;
    $input = date("d-m-Y",$input);
    $data = explode("-",$input);
    $year = $data[2];
    return $year;
}

function noOfDays($arg)
{
    if($arg == 1 || $arg == 3 || $arg == 5 || $arg == 7 || $arg == 8 || $arg == 10 || $arg == 12)
    {
        $days=31;
    }    
    elseif($arg == 2)
    {
        $days =  28;
    }
    else{
        $days = 30;
    }
    return $days;
}

function matchToday($arg)
{   
    $today = date('d-m-Y');
    $today= explode('-',$today);
    $today = $today[0];

    $toda = $arg;
    $toda= explode('-',$toda);
    $toda = $toda[0];

    //$date2 = getmyDate($today);

    if($today == $toda)
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>