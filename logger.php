<html>
    <head>
        <title>
            Log Category
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
                            Log Category
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
                     
                 </div>
                 <div class="col-md-4">
                     <h4>New LOG Category</h4><br>
                    <form action = "includes/adlogctgrybcknd.php" method="POST">
                        <input type="text" name="genre" placeholder="Genre"><br><br>
                        <input type="submit" name="adctgry" value="Add Category">
                    </form>
                 </div>
                 
                 <div class="col-md-1">
                     
                 </div>

                 <div class="col-md-4">
                     <h4>Categories</h4>
                     <div class="scrollBar"><br>
                        <?php
                        session_start();
                        $id = $_SESSION['id'];
                        $path = "info/user-info/userlogs/".$id;
                        $path1 = $path."/list.txt";
                        $data = file($path1);
                        $len = count($data);
                        $i=1;
                        while($i<$len)
                        {
                            $data1 = $data[$i];
                            ?>
                                <a href = "logdata.php?<?php echo $data1;?>" class="btn"><?php echo $data1;?></a><br>
                            <?php
                            //echo "<br>".$data1."<br>";
                            $i++;
                        }
                        ?>        
                     </div>
                 </div>
                 <div class="col-md-1"></div>
             </div>
         </div>        
    </body>
</html>