<html>
   <head>
      <title>
         Add Note
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
                        Add Note
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
               <h4>
                  Add a New Note
               </h4>
               <br>
               <form action = "includes/adnotesbcknd.php" method="POST">
                  <input type="text" name="title" placeholder="Title"><br><br>
                  <input type="text" name="note" placeholder="Note" style="height: 200px;"><br><br>                        
                  <input type="submit" name="adnote" value="Add Note">
               </form>
            </div>
            <div class="col-md-4">
               <h4>
                  Added Notes
               </h4>
               <br>
               <div class="scrollBar">
                  <?php
                     session_start();
                     $uid = $_SESSION['id'];
                     //echo $uid;
                     $path = "info/user-info/usernotes/";
                     $path1 = $path.$uid."/";
                     $path2 = $path1."list.txt";
                     $listData = file($path2);
                     $listlen = count($listData);
                     $i=1;
                     while($i<$listlen)
                     {
                         $title = $listData[$i];
                         $title = trim($title);
                         $fileToRead = $path1.$title.".txt";
                         $noteData = file($fileToRead);
                         $noteData = $noteData[1];
                         echo "<strong>".$title."</strong><br>".$noteData."<br><br>";
                         $i++;
                     }
                     
                     ?>
               </div>
            </div>
            <div class="col-md-2">
            </div>
         </div>
      </div>
   </body>
</html>