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
         Entity Profile
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
      <?php      
         $qnttid = $_SESSION['qnttid'];
         $qhid = $_SESSION['qhid'];
         $qname = $_SESSION['qname'];
         $qpp="info/".$_SESSION['qpp'];
         $qdob = $_SESSION['qdob'];         
         $qaddres=$_SESSION['qaddres'];
         $qphone=$_SESSION['qphone'];
         $qnik=$_SESSION['qnik'];
         $qgen=$_SESSION['qgen'];
         $qhght=$_SESSION['qhght'];         
         $qwgt = $_SESSION['qwgt']; 
         $qbodydimm = $_SESSION['qbodydim'];
         $qkey = $_SESSION['qkey'];
         $qbad = $_SESSION['qbad'];
         $qgood = $_SESSION['qgood'];         
         $qstrength = $_SESSION['qstrngth'];
         $qwkns = $_SESSION['qwkns'];
         $qlks = $_SESSION['qlks'];
         $qdlks = $_SESSION['qdlks'];
         $qphotos = $_SESSION['qphotos'];
         $qfrnds = $_SESSION['qfrnds'];
         $qnemies = $_SESSION['qnemies'];         
         $qmisc = $_SESSION['qmisc'];
         $qemailid = $_SESSION['qemialid'];
         $qsma = $_SESSION['qsma'];
         $qrnk = $_SESSION['qrnk'];
         $qrltn = $_SESSION['qrltn'];
         $qidno = $_SESSION['qidno'];
         $idt = $_SESSION['idt'];
         
         ?>
      <div class="jumbotron text-center">
         <div class="heading">
            <h1 class="display-5">
               <?php echo $qname; ?>
            </h1>
            <div style="float: right;padding:20px;margin-right:40px;">
               <a href = "home.php" style="font-size: 100px">.</a><br>
               <a href = "wall.php" style="color: hotpink; font-size: 100px">.</a><br>
               <a href = "entity-profile.php" style="color: green; font-size: 100px">.</a>
            </div>
         </div>
      </div>
      <div class="continer">
         <div class="row">
            <div class="col-md-3">
               <div class="card" style="width: 14rem;">
                  <img class="card-img-top" src="<?php echo $qpp; ?>" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo $qdob;?></h5>
                     <p class="card-text"><?php echo "Dimns : ".$qbodydimm."<br>Weight : ".$qwgt."Kg<br>Height : ".$qhght."cm<br>".$qaddres; ?></p>
                  </div>
               </div>
               <br>
            </div>
            <div class="col-md-3">
               <p>Photos : <a href="info/infoshow/photos.php" target="_blank"> show more</a></p>
               <p>Nick Name(s) : <a href="info/infoshow/nik.php" target="_blank"> Show More</a></p>
               <p>Social Media Account(s) : <a href="info/infoshow/sma.php" target="_blank"> Show More</a></p>
               <p>Email ID(s) : <a href="info/infoshow/eid.php" target="_blank"> Show More</a></p>
               <p>Relation(s) : <a href="info/infoshow/rltn.php" target = "_blank"> show more</a></p>
            </div>
            <div class="col-md-3">
               <p>Contact Number (s) : <a href="info/infoshow/cno.php" target="_blank"> Show More</a></p>
               <p>KeyNotes(s) : <a href="info/infoshow/keynotes.php" target = "_blank"> show more</a></p>
               <p>Friend(s) : <a href="info/infoshow/friends.php" target = "_blank"> show more</a></p>
               <p>Enemy(s) : <a href="info/infoshow/enemies.php" target = "_blank"> show more</a></p>
               <p>Important Account/ID no(s) : <a href="info/infoshow/idno.php" target = "_blank"> show more</a></p>
               <p>Important Date(s) : <a href="info/infoshow/idt.php" target = "_blank"> show more</a></p>
            </div>
            <div class="col-md-3">
               <p>Good Habits (s) : <a href="info/infoshow/good.php" target = "_blank"> show more</a></p>
               <p>Bad Habits (s) : <a href="info/infoshow/bad.php" target = "_blank"> show more</a></p>
               <p>Strength(s) : <a href="info/infoshow/strn.php" target = "_blank"> show more</a></p>
               <p>Weakness(s) : <a href="info/infoshow/wkns.php" target = "_blank"> show more</a></p>
               <p>Likes(s) : <a href="info/infoshow/lks.php" target = "_blank"> show more</a></p>
               <p>Dislikes (s) : <a href="info/infoshow/dlks.php" target = "_blank"> show more</a></p>
               <p>MiscInfo(s) : <a href="info/infoshow/misc.php" target = "_blank"> show more</a></p>
            </div>
         </div>
      </div>
   </body>
</html>