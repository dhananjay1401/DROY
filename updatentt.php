<html>
   <head>
      <title>
         TheWall
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Righteous&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <style>
         .wall {
         background-color: sandybrown;
         color: white;
         padding: 20px;
         }
         .wall:hover {
         background-color: sandybrown;
         color: white;
         font-weight: bolder;
         padding: 20px;
         }
         .addntt {
         background-color: teal;
         color: white;
         padding: 20px;
         }
         .addntt:hover {
         color: white;
         font-weight: bolder;
         padding: 20px;
         }
      </style>
   </head>
   <body>
      <div class="kontent">
      <div class="jumbotron text-center">
         <div class="heading">
            <h1 class="display-2">
               Update Entity Data
            </h1>
         </div>
      </div>
      <div class="container">
      <div class="row">
      <div class="col-md-2">
         <a href="addntt.php" class="addntt">+Add Entity</a>
      </div>
      <div class="col-md-4" style="justify-content: left;">
         <h2>Update/Add Info</h2>
         <form action="includes/updtinfo.php" method="POST">
            <input type="number" name="nttID" placeholder="Entity ID">
            <input type="submit" name="scan" value="Scan!">
         </form>
      </div>
      <div class="col-md-4">
         <h2>
            Update Relations
         </h2>
         <div class="smthForm">
            <form action="includes/updtrel.php" method="POST">
               <input type="number" name="nttid" placeholder="Entity ID">
               <input type="number" name="clo" placeholder="How Close ?">
               <input type="number" name="lon" placeholder="How Long ?">
               <input type="number" name="freq" placeholder="How Frequent ?">
               <input type="number" name="emo" placeholder="How Emo ?">
               <input type="submit" name="updateRel" value="Update">
            </form>
            <a href="includes/txtopnr.php" target="_blank">
            ReadMe For grading
            </a>
         </div>
      </div>
      <div class="col-md-2">
         <a href="wall.php" class="wall">The Wall</a>
      </div>
   </body>
</html>