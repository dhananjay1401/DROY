<?php
   $version = "0.1.4";
   ?>
<html>
   <head>
      <title>
         <?php
            $flag1=0;
            session_start();
            if(isset($_SESSION['id']))
            {
                if(isset($_SESSION['email']))
                {
                    if(isset($_SESSION['name']))
                    {
                        if(isset($_SESSION['password']))
                        {
                            if(isset($_SESSION['contact_number']))
                            {
                                $flag1=1;
                                include 'includes/dbh.php';
                                include 'includes/verifyDate.php';
                                include 'includes/checkDates.php';
                            }
                        }
                    }
                }
            }
                else
            {
                $home= "Location: index.php";
                echo header($home);
            } 
            
            echo "@".$_SESSION['name']." v".$version;
            ?>
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/home2.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Righteous&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="jumbotron text-center">
         <div class="heading">
            <div class="container">
               <div class="row">
                  <div class="col-md-2">
                     <div class="mypic">
                        <a href="includes/ud.html" target="_blank" class="showmore">
                        <img src="me1.jpg" class="img-thumbnail" style="height: 100px;">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h1 class="display-3">
                        <?php echo " ".$_SESSION['name']." "; ?>
                     </h1>
                     <h5>
                        ID : <?php echo " ".$_SESSION['id']." "; ?><br>
                     </h5>
                  </div>
                  <div class="col-md-2">
                     <div class="logout-btndiv">
                        <br><br>
                        <a href="includes/ud.html" target="_blank" class="btn btn-outline-warning">Add More</a><br><br><br>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-2">
               <div class="personal-info">
                  <p id="demo">
                     <a class="btn btn-outline-primary" href="adrmndr.php">Add Reminder</a>
                     <br>
                     <br><br>
                     <a class="btn btn-outline-primary" href="addnote.php">Add Note</a>
                     <br>
                     <br><br>
                     <a class="btn btn-outline-primary" href="logger.php">Logger</a>
                     <br>
                     <br><br>
                     <a class="btn btn-outline-primary" href="addtodo.php">ToDo</a>
                  </p>
               </div>
            </div>
            <div class="col-md-4">
               <h2>
                  Reminders
               </h2>
               <?php
                  $id = $_SESSION['id'];
                  $sql = "SELECT * FROM entityinfo WHERE handlerID = '".$id."'";
                  $query1 = mysqli_query($conn, $sql);
                  echo "<br><u><h5>BirthDays</h5></u>";
                  while($row = mysqli_fetch_array($query1))
                  {
                        $name = $row['name'];
                        $nttid = $row['nttID'];
                        $dob = $row['dateofbirth'];
                  
                        $date = $dob;
                        $date2 = date("m-d-y");//d-m-y
                  
                        $res = verifyDate($date,10);
                  
                        if($res == 1)
                        {
                           if(matchToday($dob))
                           {
                              echo "<strong><b><a>TODAY ! ! !</a></b></strong><br><br>";
                           }
                           echo "Name : ".$name."<br>ID : ".$nttid."<br>Date : ".$dob."<br>";
                           echo "<a href>Automate Greetings ?</a><br>_________________<br><br>";
                        }
                  } //Reminders for Birthdays
                  
                  //importantDates Below
                  $sql2 = "SELECT * FROM entityinfo WHERE handlerID = '".$id."'";
                  $res2 = mysqli_query($conn, $sql2);
                  
                  while($row2 = mysqli_fetch_array($res2))
                  {                    
                     $nttidno = $row2['nttID'];
                     $file = $row2['impDates'];
                     checkDates($file,$nttidno);                     
                  }
                  
                  //Personal Reminders Below
                  $fname = $_SESSION['password']."rmndr".$_SESSION['id'].".txt";
                  $filePath = "info/user-info/reminder/".$fname;
                  $data = file($filePath);
                  if(!empty($data))
                  { 
                     $len = count($data);
                     $loopCounter = 1;
                     $rmndrArray = array();
                     if($len >1)
                     {
                        echo "<u><h5>Personal Reminders</h5></u><br>";
                     } 
                     while($loopCounter < $len)
                     {  
                        $RawRmndr = $data[$loopCounter];
                        $loopCounter++;
                  
                        $rmndrData = explode("$",$RawRmndr);
                  
                        $genre = $rmndrData[0];
                        $date = $rmndrData[1];
                        $time = $rmndrData[2];
                        $msg = $rmndrData[3];
                  
                        $date = strtotime($date);
                        $dateedt = date('d-m-Y', $date);
                        $res = verifyDate($dateedt,3);
                  
                        if($res == 1)
                        {
                           if(matchToday($dateedt))
                           {
                              echo "<strong><b><a>TODAY ! ! !</a></b></strong><br><br>";
                           }
                           $rmndr1 = array($genre, $msg, $dateedt, $time);
                           array_push($rmndrArray,$rmndr1);
                           echo "<strong>".$genre."</strong>";
                           echo "<br>".$msg;
                           echo "<br><i>Dat-Tim </i>".$dateedt."-".$time."<br><br>";
                  
                        }
                     }
                  }
                  ?>
            </div>
            <div class="col-md-4">
               <h2>ToDo List</h2>
               <?php 
                  $fname = $_SESSION['password']."task".$_SESSION['id'].".txt";
                  $filePath = "info/user-info/todo/".$fname;
                  $data = file($filePath);
                  $len = count($data);
                  
                  $i = 1;
                  
                  function nefl($arg)
                  {
                     $input = $arg;
                     $len = strlen($input);
                  
                     if($len >1)
                     {
                        return true;
                     }
                     else
                     {
                        return false;
                     }
                  }
                  $t = 1;
                  $noc = 0;
                  while($t<$len)
                  {
                     $task = $data[$t];
                     $t++;
                     if(strlen($task)>1)
                     {
                        $noc = 1;
                     }
                  }
                  
                  if($len>1 && $noc==1)
                  {
                     ?>
               <form action = "includes/adtodobknd.php" method="POST">
                  <input type="number" name="taskId" placeholder="Task ID">
                  <input type="submit" name="remtodo2" value="Remove Task">
               </form>
               <div class="scrollBar">
                  <?php
                     echo "<strong>TId &nbsp Task<br></strong>";
                     }
                     else
                     {
                     echo "<strong><i><br><br><br>No Tasks Pending</i></strong>";
                     }
                     
                     while($i<$len)
                     {
                     $dateToday = date('d-m-Y');
                     $task = $data[$i];
                     
                     $taskData = explode("$",$task);
                     if(nefl($task))
                     {                        
                        $tid = $taskData[0];
                        $task = $taskData[1];
                        $dedln = $taskData[2];        
                        
                            echo $tid."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$task."<br>";
                            echo "__________________<br><br>";
                     }                        
                     $i++;
                     }
                     echo ". . . E N D. . . "
                     ?>
               </div>
            </div>
            <div class="col-md-2">
               <div class="modulelist">
                  <div class="addntt-btndiv">
                     <a class="btn btn-outline-secondary" href="info/infoshow/triangle.php">Triangle Data</a>
                  </div>
                  <br><br>
                  <div class="wall-btndiv">
                     <a class="btn btn-outline-secondary" href="wall.php">The Wall</a>
                  </div>
                  <br><br>
                  <div class="logout-btndiv">
                     <a class="btn btn-outline-danger" href="index.php">Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>