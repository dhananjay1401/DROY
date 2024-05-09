<?php

    function checkDates($arg,$id)
    {
        include_once 'verifyDate.php';
        $filePath = "info/".$arg;
        $fileData = file($filePath);

        if(!empty($fileData))
        {
            $data = $fileData[1];
            $dataArray = explode("$",$data);
            $date = $dataArray[0];
            $event = $dataArray[1];
            $res = verifyDate($date, 10);
            if($res == 1)
            {   
                if(matchToday($dob))
                           {
                              echo "<strong><b>TODAY ! ! !</b></strong><br>";
                           }
                
                ?>
                <div style="background-color:indigo;color :white;margin : 25px;padding:20px;border-radius : 15px;">
                <a href = "" style="color : white;"><?php echo $event." ";
                echo $date. "  ID : ";echo $id; ?></a>
                </div>
                
                <?php
            }
            //echo $data;
            //print_r($fileData);
            echo "<br>";
        }
        
    }
?>