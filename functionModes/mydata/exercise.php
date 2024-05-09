<html>
    <head>
        <title>
            Workout || Diet
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
                     <div class="col-md-3">
                        <div class="pane">
                           <a href="home.php" class="addntt">
                           Home
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <h1 class="display-5">
                        Workout || Diet
                        </h1>
                     </div>
                     <div class="col-md-3">
                        <div class="pane">
                           <a href= "wall.php" class="updtntt">
                           The Wall
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="container">
             <div class="row">
                 <div class="col-md-2">
                     <?php
                     echo date('d-m-Y');
                     ?>
                 </div>
                 <div class="col-md-4">
                     <h4>Add New EXERCISE</h4><br>
                    <form action = "../../includes/ad-ex-bcknd.php" method="POST">
                        <input type="text" name="exname" placeholder="Exercise"><br><br>
                        <input type="submit" name="adex" value="Add Exercise">
                    </form>
                 </div>
                 
                 <div class="col-md-1">
                     
                 </div>

                 <div class="col-md-4">
                     <h4>Categories</h4>
                     <div class="scrollBar"><br>

                     <form action="../../includes/ad-ex-bcknd.php" method="POST">
                <?php
                    session_start();
                    $id = $_SESSION['id'];
                    $path = "../../info/user-info/userfit/".$id;
                    $path1 = $path."/Exercise/format.txt";

                    $data = file($path1) or die("add Categories");
                    $len = count($data) or die("add Categories");

                    if($len==0)
                    {
                        //open Format edit section
                        header("Location:exercise.php?UpdateFormatAddFieldsToProceed");
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
                <input type="submit" name="updtex" value="ADD DATA">                
            </form>


                        <?php
                       // session_start();
                       // $id = $_SESSION['id'];
                        //$path = "info/user-info/userfit/".$id;
                        //$path1 = $path."/format.txt";
                        //$data = file($path1);
                        //$len = count($data);
                        //$i=1;
                        //while($i<$len)
                        //{
                          //  $data1 = $data[$i];
                            ?>
                                <a href = ".php?<?php //echo $data1;?>" class="btn"><?php //echo $data1;?></a><br>
                            <?php
                            //echo "<br>".$data1."<br>";
                            //$i++;
                       // }
                        ?>        
                     </div>
                 </div>
                 <div class="col-md-1"></div>
             </div>
         </div>        
    </body>
</html>