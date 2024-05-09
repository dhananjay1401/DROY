<html>
   <head>
      <title>
         TheWall
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/wall.css">
      <script src="js/wall2.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Righteous&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="kontent">
         <div class="jumbotron text-center">
            <div class="heading">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="pane">
                           <a href="addntt.php" class="addntt">
                           +Add Entity
                           </a>
                        </div>
                        <br><br>
                        <div class="home">
                           <a href="home.php">
                              Home
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <h1 class="display-2">
                           The Wall
                        </h1>
                     </div>
                     <div class="col-md-3">
                        <div class="pane">
                           <?php
                              session_start();
                              include 'includes/dbh.php';
                              $hid = $_SESSION['id'];
                                  $query = "SELECT * FROM entityinfo WHERE handlerID = ".$hid;
                                  $result = mysqli_query($conn, $query) or die("Query failed !!");
                                  $noOfEntities = mysqli_num_rows($result);
                              
                                  if($noOfEntities == 0)
                                  {
                                     $link = "addntt.php";
                                     $btname = "+Add Entity";
                                  }
                                  else
                                  {
                                     $link = "updatentt.php";
                                     $btname = "Update entity";
                                  }
                              
                                  ?>
                           <a href= "<?php echo $link;?>" id="checkbtn" class="updtntt">
                           <?php echo $btname;?>
                           </a>
                        </div>
                        
                        <br><br>
                        <div class="home">
                           <a href="index.php">
                              Logout
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <?php
                  $extrai = $noOfEntities%4;
                    $i = 0;
                    $t = 0;
                  
                    while($row = mysqli_fetch_array($result))
                    {
                       $resdata[$t]['nttid'] = $row['nttID'];
                       $resdata[$t]['name'] = $row['name'];
                       $resdata[$t]['pp'] = $row['profilephoto'];          
                       $t++;                 
                    }  
                  
                    $t = $i*4;
                    $flag = 0;
                    if((($noOfEntities-$extrai)/4) > 0)
                    {
                  
                     $flag = 1;
                      while($i < (($noOfEntities-$extrai)/4))
                      {
                        
                       $resDataNttid[0] = $resdata[($i*4)+0]['nttid'];
                       $resDataNttid[1] = $resdata[($i*4)+1]['nttid'];
                       $resDataNttid[2] = $resdata[($i*4)+2]['nttid'];
                       $resDataNttid[3] = $resdata[($i*4)+3]['nttid'];
                  
                       $resDataName[0] = $resdata[($i*4)+0]['name'];
                       $resDataName[1] = $resdata[($i*4)+1]['name'];
                       $resDataName[2] = $resdata[($i*4)+2]['name'];
                       $resDataName[3] = $resdata[($i*4)+3]['name'];
                  
                       $resDataPpd[0] = "info/".$resdata[($i*4)+0]['pp'];
                       $resDataPpd[1] = "info/".$resdata[($i*4)+1]['pp'];
                       $resDataPpd[2] = "info/".$resdata[($i*4)+2]['pp'];
                       $resDataPpd[3] = "info/".$resdata[($i*4)+3]['pp'];
                  
                       ?>
               <br>
               <div class="col-md-3">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[0] ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[0]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[0]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[0]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[1] ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[1]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[1]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[1]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[2] ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[2]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[2]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[2]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[3]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[3]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[3]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[3]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <?php
                  $i++;                        
                  }
                  
                  $t = $i*4;
                  
                  ?>
               <?php
                  }
                  
                  
                  if($extrai == 1)
                  {
                  $resDataNttid[$i+1]  =$resdata[$t]['nttid'];
                  $resDataName[$i+1] = $resdata[$t]['name'];
                  $resDataPpd[$i+1] = "info/".$resdata[$t]['pp'];
                  
                  ?> 
               <div class="col-md-4">
                  <a href="index.php">Index</a>
               </div>
               <div class="col-md-4">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[$i+1]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[$i+1]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[$i+1]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[$i+1]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-4">
                  <a href="home.php">Home</a>
               </div>
               <?php 
                  } 
                  elseif($extrai == 2)
                  {
                     $resDataNttid[$i+1]  =$resdata[$t]['nttid'];
                     $resDataName[$i+1] = $resdata[$t]['name'];
                     $resDataPpd[$i+1] = "info/".$resdata[$t]['pp'];
                  
                     
                     $resDataNttid[$i+2]  =$resdata[$t+1]['nttid'];
                     $resDataName[$i+2] = $resdata[$t+1]['name'];
                     $resDataPpd[$i+2] = "info/".$resdata[$t+1]['pp'];
                     ?>
               <div class="col-md-2">
                  <a href="home.php">Home</a>
               </div>
               <div class="col-md-4">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[$i+1]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[$i+1]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[$i+1]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[$i+1]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[$i+2]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[$i+2]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[$i+2]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[$i+2]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-2">
                  <a href="Index.php">Index</a>
               </div>
               <?php
                  }
                  elseif($extrai == 3)
                  {
                                          
                     $resDataNttid[$i+1]  =$resdata[$t]['nttid'];
                     $resDataName[$i+1] = $resdata[$t]['name'];
                     $resDataPpd[$i+1] = "info/".$resdata[$t]['pp'];
                  
                     
                     $resDataNttid[$i+2]  =$resdata[$t+1]['nttid'];
                     $resDataName[$i+2] = $resdata[$t+1]['name'];
                     $resDataPpd[$i+2] = "info/".$resdata[$t+1]['pp'];
                  
                     
                     $resDataNttid[$i+3]  =$resdata[$t+2]['nttid'];
                     $resDataName[$i+3] = $resdata[$t+2]['name'];
                     $resDataPpd[$i+3] = "info/".$resdata[$t+2]['pp'];
                  
                     ?>
               <div class="col-md-4">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[$i+1]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[$i+1]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[$i+1]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[$i+1]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[$i+2]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[$i+2]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[$i+2]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[$i+2]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="container">
                     <div class="card" style="width:250px;height:auto;">
                        <img class="card-img-top" src="<?php echo $resDataPpd[$i+3]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                           <h4 class="card-title"><?php echo $resDataName[$i+3]; ?></h4>
                           <p class="card-text">ID : <?php echo $resDataNttid[$i+3]."<br>"; ?>
                           </p>
                           <form action="includes/updtinfo.php" method="POST">
                              <button name="scan2" type="submit" class="btn btn-primary" value="<?php echo $resDataNttid[$i+3]; ?>">See Profile</button>
                           </form>
                        </div>
                     </div>
                     <br><br>
                  </div>
               </div>
               <?php
                  }
                  else{
                  
                     if($flag == 1)
                     {
                  
                     }
                     else
                     {
                     ?>
               <div class="col-md-3">
                  <a href="Index.php" class="">
                  Index
                  </a>
               </div>
               <div class="col-md-6">
                  <h3 class="display-5">
                     You have Added 0 entities to your wall
                  </h3>
                  <br>
                  <a href="addntt.php" class="addntt">
                  +Add Entity
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="home.php" class="wall">
                  Home
                  </a>
               </div>
               <?php
                  }
                  }
                  ?>
            </div>
         </div>
      </div>
   </body>
</html>