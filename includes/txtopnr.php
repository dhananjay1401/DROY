<html>
    <head>
        <title>
            Grading Instructions
        </title>
    </head>
<?php

$file = "legend.txt";
$data = file($file);
$i = count($data);
$j = 0;
while($j < $i)
{
echo $data[$j]."<br>";
$j=$j+1;
}
?>
</html>