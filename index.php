<?php
$version = "0.1.6";
?>
<html>
   <head>
      <title>
         TroyAI <?php echo $version ?>
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Righteous&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
      <?php       
         session_start();
         $_SESSION = array();         
         session_destroy();         
         ?> 
      <div class="jumbotron text-center">
         <div class="heading">
            <h1 class="display-1">
               TroyAI
            </h1>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="signin-form">
                  <h2>Sign In</h2>
                  <br>
                  <form action="includes/signin.php" method="POST">
                     <input type="email" name="emailin" placeholder="Email"><br><br>
                     <input type="password" name="pwd-in" placeholder="Password"><br><br>
                     <input type="submit" name="signin-submit" value="Sing-In">
                  </form>
                  <br><br><br>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-center-align">
                  <div class="troyai-anim">
                  </div><br><br><br>
               </div>
            </div>
            <div class="col-md-4">
               <div class="signup-form">
                  <h2>Sign Up</h2>
                  <form action="includes/ud.html" method="POST">
                     <input type="email" name="email" placeholder="Email"><br><br>
                     <input type="text" name="name" placeholder="Name"><br><br>
                     <input type="number" name="number" placeholder="Phone Number"><br><br>
                     <input type="password" name="pwd" placeholder="Password"><br><br>
                     <input type="submit" name="signup-submit" value="Signup" disabled>
                  </form>
               </div>
              
            </div>
         </div>
      </div>
   </body>
</html>