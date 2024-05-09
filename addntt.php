<html>
   <head>
      <title>Add Entity</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/addntt.css">
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
            <h1 class="display-1">
               Add Entity
            </h1>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-2">
               <a href="updatentt.php" class="updtntt">
               Update entity
               </a>
            </div>
            <div class="col-md-8">
               <div class="addnttform">
                  <form action="includes/addnttbknd.php" method="POST" enctype="multipart/form-data">
                     <input type="text" name="nttname" placeholder="Name"><br><br>
                     <input type="file" name="imgfile" placeholder="profilePhoto"><br><br>
                     <input type="submit" name="submit" value="Add">
                  </form>
               </div>
            </div>
            <div class="col-md-2">
               <a href="wall.php" class="wall">The Wall</a>
            </div>
         </div>
      </div>
   </body>
</html>