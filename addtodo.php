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
                                include 'includes/dbh.php';
                                include 'includes/verifyDate.php';
                                //include 'includes/status.php';
                            }
                        }
                    }
                }
            }
                else
            {
                $home= "Location: index.php";
                echo header($home);
            } 
        ?>

           <title>
               Todo TaskManager v0.2
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
                           Add/Remove a ToDo Task
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
                    <form action = "includes/adtodobknd.php" method="POST">
                        <input type="text" name="task" placeholder="Task"><br><br>
                        <input type="date" name="date" placeholder="DeadLine"><br><br>
                        
                        <input type="submit" name="adtodo" value="Add Task">
                    </form>
                 </div>
                 <div class="col-md-4">
                    <form action = "includes/adtodobknd.php" method="POST">
                        <input type="number" name="taskId" placeholder="Task ID"><br><br>
                        
                        <input type="submit" name="remtodo" value="Remove Task">
                    </form>
                 </div>
                 <div class="col-md-2">
                     
                 </div>
             </div>
         </div>
    </body>
</html>