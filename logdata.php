<?php
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
    ?>
    <html>
        <head>
            <title>
                <?php echo $pgnm;?>
            </title>
        </head>
        <body><br><br><br>
        <a href="home.php">Home</a><br>
        <a href="logger.php">Logs</a>
        <br><br>
            <form action="includes/addlogtofile.php?<?php echo $pgnm;?>" method="POST">
                <?php
                    session_start();
                    $id = $_SESSION['id'];
                    $path = "info/user-info/userlogs/".$id;
                    $path1 = $path."/".$pgnm."/format.txt";

                    $data = file($path1);
                    $len = count($data);

                    if($len==0)
                    {
                        //open Format edit section
                        header("Location:logger.php?UpdateFormatAddFieldsToProceed");
                    }

                    $i=1;
                    while($i<$len)
                    {
                        $fldnm=$data[$i];
                        ?>
                        <input type="text" name="<?php echo $fldnm;?>" placeholder="<?php echo $fldnm;?>"><br><br>
                        <?php
                        $i++;
                    }
                ?>
                <input type="submit" name="addlog" value="LOG DATA">                
            </form><br><hr><br><table>
            <?php
            
                $pathL = $path."/".$pgnm."/logdata.txt";
                $pathR = $path."/".$pgnm."/format.txt";
                $format= file($pathR);
                $formatLen = count($format);
                $c=1;
                ?>

                <tr>

                    <?php
                while($c<$formatLen)
                {
                    $headerName=$format[$c];
                    ?>
                        <th><?php echo $headerName."&nbsp&nbsp";?></th>
                    <?php
                    $c++;
                }
                ?><th>Date</th>
                </tr>
                <?php 
                //---j

                $dataOfFile = file($pathL);
                $datalenFile = count($dataOfFile);
                $a=1;
                while($a<$datalenFile)
                {
                    $dataPrint = $dataOfFile[$a];
                    //echo $dataPrint;
                    $rowData = explode("$",$dataPrint);
                    $rowLen = count($rowData);
                    $b=0;
                    ?>
                    <tr>
                        <?php
                    while($b<$rowLen)
                    {
                        ?> <td><?php echo $rowData[$b];?></td><?php
                        //." &nbsp&nbsp&nbsp&nbsp&nbsp"
                        $b++;
                    } 
                    ?>
                </tr>
                <?php               
                    $a++;
                }
            ?>
            </table>
        </body>
    </html>