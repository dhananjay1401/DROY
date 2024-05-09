<html>
<head>
<?php
$flag=0;
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
                             $flag=1;
                         }
                     }
                 }
             }
         }
             else
         {
             $home= "Location: index.php";
             echo header($home);
         } ?>
      <title>
         Home Mode Select
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/wall.css">
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
                        <img src="misc/img/rndm.png" class="img-thumbnail" style="width: 125px;">
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
                        
                        <a href="includes/ud.html" target="_blank" class="addmore">Add More</a><br><br><br>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container">
      <div class="row">
         <div class="">Spizie Module</div>
         <div class="">Normal Assistant</div>
         <div class=""></div>
         <div class=""></div>
      </div></div>


   </body>
</html>