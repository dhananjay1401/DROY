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
      <style>
         .sidenav {
         height: 100%;
         width: 0;
         position: fixed;
         z-index: 1;
         top: 0;
         left: 0;
         background-color: #111;
         overflow-x: hidden;
         transition: 0.5s;
         padding-top: 60px;
         }
         .sidenav a {
         padding: 8px 8px 8px 32px;
         text-decoration: none;
         font-size: 25px;
         color: #818181;
         display: block;
         transition: 0.3s;
         }
         .sidenav a:hover {
         color: #f1f1f1;
         }
         .sidenav .closebtn {
         position: absolute;
         top: 0;
         right: 25px;
         font-size: 36px;
         margin-left: 50px;
         }
         @media screen and (max-height: 450px) {
         .sidenav {padding-top: 15px;}
         .sidenav a {font-size: 18px;}
         }
      </style>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/wall.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Righteous&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script>
         function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </head>
   <body>
      <?php      
         $qnttid = $_SESSION['qnttid'];
         $qhid = $_SESSION['qhid'];
         $qname = $_SESSION['qname'];
         $qpp= "info/".$_SESSION['qpp'];
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
         <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Modes</a>
            <a href="#">Brain Heart SSo</a>
            <a href="#">Intel</a>
            <a href="#">ADD Files</a>
         </div>
         <span style="font-size:30px;cursor:pointer" onclick="openNav()">
            <div class="heading">
               <h1 class="display-5">
                  <?php echo $qname; ?>
               </h1>
               <div style="float: right;padding:20px;margin-right:40px;">
                  <a href = "home.php" style="font-size: 100px">.</a><br>
                  <a href = "wall.php" style="font-size: 100px; color : hotpink;">.</a><br>
                  <a href = "entity-profile2.php" style="font-size: 100px; color:green;">.</a><br>
               </div>
            </div>
         </span>
      </div>
      <div class="continer">
         <div class="row">
            <div class="col-md-3">
               <img src="<?php echo $qpp;?>" class="img-thumbnail">
               <br><br>
               <p>KeyNotes(s) :   <button style="float: right;" type="button" data-toggle="modal" data-target="#key">Show</button>   
               </p>
               <form action="includes/updtinfo.php" method="POST">
                  <input type="text" name="newknot" placeholder="Add New Note">
                  <input style="float: right;" type="submit" value="ADD" name="updateknot">
               </form>
               <form action="includes/updtinfo.php" method="POST">
                  <p>Address :  <?php echo $qaddres;?></p>
                  <input type="text" name="newadrs" placeholder="Update Address">
                  <input style="float: right;" type="submit" value="Update" name="updateadrs">
               </form>
            </div>
            <div class="col-md-3">
               <form action="includes/updtinfo.php" method="POST">
                  <p>Date Of Birth : <?php echo $qdob;?></p>
                  <input type="text" name="newdob" placeholder="Date-Of-Birth">
                  <input style="float: right;" type="submit" value="Update" name="updatedob">
               </form>
               <form action="includes/updtinfo.php" method="POST">
                  <p>Gender : <?php echo $qgen;?></p>
                  <input type="text" name="newgen" placeholder="Gender">
                  <input style="float: right;" type="submit" value="Update" name="updategen">
               </form><br>
               <form action="includes/updtinfo.php" method="POST">
                  <p>Weight : <?php echo $qwgt;?></p>
                  <input type="text" name="newwgt" placeholder="Weight">
                  <input style="float: right;" type="submit" value="Update" name="updatewgt">
               </form><br>
               <form action="includes/updtinfo.php" method="POST">
                  <p>Height : <?php echo $qhght;?></p>
                  <input type="text" name="newhght" placeholder="Height">
                  <input style="float: right;" type="submit" value="Update" name="updatehght">
               </form><br>
               <form action="includes/updtinfo.php" method="POST">
                  <p>Body-Dimmension : <?php echo $qbodydimm;?></p>
                  <input type="text" name="newbodydimm" placeholder="Body Dimmensions">
                  <input style="float: right;" type="submit" value="Update" name="updatebodydimm">
               </form><br>
               <p>Friend(s) :   <button style="float: right;" type="button" data-toggle="modal" data-target="#frnd">Show </button>   
               </p>
               <form action="includes/updtinfo.php" method="POST">
                  <input type="text" name="newfrnds" placeholder="New Friend">
                  <input style="float: right;" type="submit" value="ADD" name="updatefrnds">
               </form><br>
               <p>Enemy(s) : <button style="float: right;" type="button" data-toggle="modal" data-target="#nemy">Show </button>   
               </p>
               <form action="includes/updtinfo.php" method="POST"> 
                  <input type="text" name="newnemy" placeholder="New Enemy">
                  <input style="float: right;" type="submit" value="ADD" name="updatenemy">
               </form><br>
            </div>
            <div class="col-md-3">
               <p>Nick Name(s) :   <button style="float: right;" type="button" data-toggle="modal" data-target="#nik">Show</button></p>
               <form action="includes/updtinfo.php" method="POST">                     
                  <input type="text" name="newnik" placeholder="Add new Nick Name">
                  <input style="float: right;" type="submit" value="ADD" name="updatenik">
               </form><br>
               <p>Email ID(s) : <a href="info/infoshow/eid.php" target="_blank"> Show More</a></p>
               <form action="includes/updtinfo.php" method="POST">                   
                  <input type="text" name="neweid" placeholder="Add new Email-ID">
                  <input style="float: right;" type="submit" value="ADD" name="updateeid">
               </form><br>
               <p>Social Media Account(s) :  <button style="float: right;" type="button" data-toggle="modal" data-target="#sma">Show</button></p>
               <form action="includes/updtinfo.php" method="POST">                 
                  <input type="text" name="newsma" placeholder="Social media Acc link">
                  <input style="float: right;" type="submit" value="ADD" name="updatesma">
               </form><br>
               <p>Contact Number (s) : <a href="info/infoshow/cno.php" target="_blank"> Show More</a></p>
               <form action="includes/updtinfo.php" method="POST">                
                  <input type="text" name="newcno" placeholder="New Contact Number">
                  <input style="float: right;" type="submit" value="ADD" name="updatecno">
               </form><br>
               <p>Important Date(s) : <a href="info/infoshow/idt.php" target="_blank"> Show More</a></p>
               <form action="includes/updtinfo.php" method="POST">                
                  <input type="text" name="newidt" placeholder="Date"><br>
                  <input type="text" name="newevent" placeholder="Event">
                  <input style="float: right;" type="submit" value="ADD" name="updateidt">
               </form><br>
               <p id="testclassphoto">Photos : <a href="info/infoshow/photos.php" target="_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST" enctype="multipart/form-data">                  
                  <input type="text" name="picdesc" placeholder="Description Of Pic">
                  <input type="file" name="newpic" placeholder="Upload Entity Image"><br>
                  <input style="float: right;" type="submit" value="ADD" name="updatepic">
               </form><br>
               <p>Relation(s) : <a href="info/infoshow/rltn.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST"> 
                  <input type="text" name="newrltn" placeholder="Relations Info">
                  <input style="float: right;" type="submit" value="ADD" name="updaterltn">
               </form><br>
               <p>Important Account/ID no(s) : <a href="info/infoshow/idno.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST">                
                  <input type="text" name="newidno" placeholder="Add Acc/ID number">
                  <input style="float: right;" type="submit" value="ADD" name="updateidno">
               </form><br>
            </div>
            <div class="col-md-3">
               <p>Good Habits (s) : <a href="info/infoshow/good.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST">
                  <input type="text" name="newghbt" placeholder="ADD New Good Habit">
                  <input style="float: right;" type="submit" value="ADD" name="updateghbt">
               </form><br>
               <p>Bad Habits (s) : <a href="info/infoshow/bad.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST">   
                  <input type="text" name="newbad" placeholder="ADD New Bad Habit">
                  <input style="float: right;" type="submit" value="ADD" name="updatebad">
               </form><br>
               <p>Strength(s) :  <button style="float: right;" type="button" data-toggle="modal" data-target="#strn">
                  Show
                  </button>
               </p>
               <form action="includes/updtinfo.php" method="POST"> 
                  <input type="text" name="newstrn" placeholder="ADD New Strength">
                  <input style="float: right;" type="submit" value="ADD" name="updatestrn">
               </form><br>
               <p>
                  Weakness(s) : 
                  <!-- Trigger the modal with a button -->
                  <button style="float: right;" type="button" data-toggle="modal" data-target="#wkns">Show</button>   
                  <!--<a href="info/infoshow/wkns.php" target = "_blank"> show more</a>-->
               </p>
               <form action="includes/updtinfo.php" method="POST">  
                  <input type="text" name="newwkns" placeholder="Weakness/FaultLines">
                  <input style="float: right;" type="submit" value="ADD" name="updatewkns">
               </form><br>
               <p>Likes(s) : <button style="float: right;" type="button" data-toggle="modal" data-target="#lks">Show</button></p>
               <form action="includes/updtinfo.php" method="POST">
                  <input type="text" name="newlks" placeholder="ADD New Like">
                  <input style="float: right;" type="submit" value="ADD" name="updatelks">
               </form><br>
               <p>Dislikes (s) : <a href="info/infoshow/dlks.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST">   
                  <input type="text" name="newdlks" placeholder="Add New Dislike">
                  <input style="float: right;" type="submit" value="ADD" name="updatedlks">
               </form><br>
               <p>MiscInfo(s) : <a href="info/infoshow/misc.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST">
                  <input type="text" name="newmsc" placeholder="Dreams | Talents | Secrets">
                  <input style="float: right;" type="submit" value="ADD" name="updatemsc">
               </form><br>
               <p>Character Tags/Titles: <a href="info/infoshow/misc.php" target = "_blank"> show more</a></p>
               <form action="includes/updtinfo.php" method="POST">      
                  <input type="text" name="newmsc" placeholder="Tags / Titles">           
                  <input style="float: right;" type="submit" value="Add" name="emdt">
               </form><br>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="wkns" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Weakness</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qwkns'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                        echo "Nothing To Show";
                        }
                        else{
                        $len = count($data);
                        $i = 1;
                        while($i<=$len-1)
                        {
                        $toPrint = $data[$i];
                        echo $toPrint;
                        ?>
                     <?php
                        $i++;
                        echo "<br>";
                        }
                        }            
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="strn" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Strength</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qstrngth'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                            echo "Nothing To Show";
                        }
                        else{
                            $len = count($data);
                            $i = 1;
                            while($i<=$len-1)
                            {
                                $toPrint = $data[$i];
                                echo $toPrint;
                                $i++;
                                echo "<br>";
                            }
                        }
                        
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="lks" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Likes</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qlks'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                            echo "Nothing To Show";
                        }
                        else{
                            $len = count($data);
                            $i = 1;
                            while($i<=$len-1)
                            {
                                $toPrint = $data[$i];
                                echo $toPrint;
                                $i++;
                                echo "<br>";
                            }
                        }
                        
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="nik" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Nick Names</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qnik'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                            echo "Nothing To Show";
                        }
                        else{
                            $len = count($data);
                            $i = 1;
                            while($i<=$len-1)
                            {
                                $toPrint = $data[$i];
                                echo $toPrint;
                                $i++;
                                echo "<br>";
                            }
                        }
                        
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="sma" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Social Media Acoounts</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qsma'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                        echo "Nothing To Show";
                        }
                        else{
                        $len = count($data);
                        $i = 1;
                        while($i<=$len-1)
                        {
                        $toPrint = $data[$i];
                        
                        $toLinkArray = explode(" ",$toPrint);
                        echo $toLinkArray[0];
                        $toLinkArray = $toLinkArray[1];
                        ?>
                        <a href="<?php echo $toLinkArray; ?>" target="_blank">Click ME</a><br>
                        
                     <?php
                        $i++;
                        echo "<br>";
                        }
                        }            
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="key" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Keynotes</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qkey'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                        echo "Nothing To Show";
                        }
                        else{
                        $len = count($data);
                        $i = 1;
                        while($i<=$len-1)
                        {
                        $toPrint = $data[$i];
                        echo $toPrint;
                        ?>
                     <?php
                        $i++;
                        echo "<br>";
                        }
                        }            
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="nemy" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Enemy</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qnemies'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                        echo "Nothing To Show";
                        }
                        else{
                        $len = count($data);
                        $i = 1;
                        while($i<=$len-1)
                        {
                        $toPrint = $data[$i];
                        echo $toPrint;
                        ?>
                     <?php
                        $i++;
                        echo "<br>";
                        }
                        }            
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <!-- Modal -->
         <div class="modal fade" id="frnd" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Friends</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <?php
                        $filePath = "info/".$_SESSION['qfrnds'];
                        $data = file($filePath);
                        if(empty($data))
                        {
                        echo "Nothing To Show";
                        }
                        else{
                        $len = count($data);
                        $i = 1;
                        while($i<=$len-1)
                        {
                        $toPrint = $data[$i];
                        echo $toPrint;
                        ?>
                     <?php
                        $i++;
                        echo "<br>";
                        }
                        }            
                        ?>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>