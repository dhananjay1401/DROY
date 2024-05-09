<?php
   if(isset($_REQUEST['scan']))
   {
       include 'dbh.php';
       session_start();
       $hid= $_SESSION['id'];
       $nttid = $_REQUEST['nttID'];
       $sql = "SELECT * FROM entityinfo WHERE nttID = '".$nttid."' AND handlerID = '".$hid."'";
       $result = mysqli_query($conn,$sql);
       $result = mysqli_fetch_array($result);
   
       $_SESSION['qnttid'] = $result['nttID'];
       $_SESSION['qhid'] = $result['handlerID'];
       $_SESSION['qname'] = $result['name'];
       $_SESSION['qpp'] = $result['profilephoto'];
       $_SESSION['qdob'] = $result['dateofbirth'];
       $_SESSION['qaddres'] = $result['address'];
       $_SESSION['qphone'] = $result['contactnumber'];
       $_SESSION['qnik'] = $result['nicknames'];
       $_SESSION['qgen'] = $result['gender'];
       $_SESSION['qhght'] = $result['height'];
       $_SESSION['qwgt'] = $result['weight']; 
       $_SESSION['qbodydim'] = $result['bodydimm'];
       $_SESSION['qkey'] = $result['keynotes'];
       $_SESSION['qbad'] = $result['badhabbit'];
       $_SESSION['qgood'] = $result['goodhabbit'];
       $_SESSION['qstrngth'] = $result['strength'];
       $_SESSION['qwkns'] = $result['weakness'];
       $_SESSION['qlks'] = $result['likes'];
       $_SESSION['qdlks'] = $result['dislike'];
       $_SESSION['qphotos'] = $result['photos'];
       $_SESSION['qfrnds'] = $result['friends'];
       $_SESSION['qnemies'] = $result['enemies'];
       $_SESSION['qmisc'] = $result['miscinfo'];
       $_SESSION['qemialid'] = $result['emailid'];
       $_SESSION['qsma'] = $result['socialmediaacc'];
       $_SESSION['qrnk'] = $result['trianglerank'];
       $_SESSION['qrltn'] = $result['relations'];
       $_SESSION['qidno'] = $result['impIDnos'];
       $_SESSION['idt'] = $result['impDates'];
   
       $redirect = "Location: ../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['scan2']))
   {
       include 'dbh.php';
       session_start();
       $hid= $_SESSION['id'];
       $nttid = $_REQUEST['scan2'];
       $sql = "SELECT * FROM entityinfo WHERE nttID = '".$nttid."' AND handlerID = '".$hid."'";
       $result = mysqli_query($conn,$sql);
       $result = mysqli_fetch_array($result);
   
       $_SESSION['qnttid'] = $result['nttID'];
       $_SESSION['qhid'] = $result['handlerID'];
       $_SESSION['qname'] = $result['name'];
       $_SESSION['qpp'] = $result['profilephoto'];
       $_SESSION['qdob'] = $result['dateofbirth'];
       $_SESSION['qaddres'] = $result['address'];
       $_SESSION['qphone'] = $result['contactnumber'];
       $_SESSION['qnik'] = $result['nicknames'];
       $_SESSION['qgen'] = $result['gender'];
       $_SESSION['qhght'] = $result['height'];
       $_SESSION['qwgt'] = $result['weight']; 
       $_SESSION['qbodydim'] = $result['bodydimm'];
       $_SESSION['qkey'] = $result['keynotes'];
       $_SESSION['qbad'] = $result['badhabbit'];
       $_SESSION['qgood'] = $result['goodhabbit'];
       $_SESSION['qstrngth'] = $result['strength'];
       $_SESSION['qwkns'] = $result['weakness'];
       $_SESSION['qlks'] = $result['likes'];
       $_SESSION['qdlks'] = $result['dislike'];
       $_SESSION['qphotos'] = $result['photos'];
       $_SESSION['qfrnds'] = $result['friends'];
       $_SESSION['qnemies'] = $result['enemies'];
       $_SESSION['qmisc'] = $result['miscinfo'];
       $_SESSION['qemialid'] = $result['emailid'];
       $_SESSION['qsma'] = $result['socialmediaacc'];
       $_SESSION['qrnk'] = $result['trianglerank'];
       $_SESSION['qrltn'] = $result['relations'];
       $_SESSION['qidno'] = $result['impIDnos'];
       $_SESSION['idt'] = $result['impDates'];
   
       $redirect = "Location: ../entity-profile2.php";
       header($redirect);
   }
   if(isset($_REQUEST['updatedob']))
   {
       include 'dbh.php';
       session_start();
   
       $sql = "UPDATE entityinfo SET dateofbirth = '".$_REQUEST['newdob']."' WHERE nttID = '".$_SESSION['qnttid']."' AND handlerID = '".$_SESSION['qhid']."'";
       mysqli_query($conn, $sql);
       $_SESSION['qdob'] = $_REQUEST['newdob'];
       $redirect = "Location:../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['updategen']))
   {
       include 'dbh.php';
       session_start();
   
       $sql = "UPDATE entityinfo SET gender = '".$_REQUEST['newgen']."' WHERE nttID = '".$_SESSION['qnttid']."' AND handlerID = '".$_SESSION['qhid']."'";
       mysqli_query($conn, $sql);
       $_SESSION['qgen'] = $_REQUEST['newgen'];
       $redirect = "Location:../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['updatewgt']))
   {
       include 'dbh.php';
       session_start();
   
       $sql = "UPDATE entityinfo SET weight = '".$_REQUEST['newwgt']."' WHERE nttID = '".$_SESSION['qnttid']."' AND handlerID = '".$_SESSION['qhid']."'";
       mysqli_query($conn, $sql);
       $_SESSION['qwgt'] = $_REQUEST['newwgt'];
       $redirect = "Location:../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['updatehght']))
   {
       include 'dbh.php';
       session_start();
   
       $sql = "UPDATE entityinfo SET height = '".$_REQUEST['newhght']."' WHERE nttID = '".$_SESSION['qnttid']."' AND handlerID = '".$_SESSION['qhid']."'";
       mysqli_query($conn, $sql);
       $_SESSION['qhght'] = $_REQUEST['newhght'];
       $redirect = "Location:../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['updatebodydimm']))
   {
       include 'dbh.php';
       session_start();
   
       $sql = "UPDATE entityinfo SET bodydimm = '".$_REQUEST['newbodydimm']."' WHERE nttID = '".$_SESSION['qnttid']."' AND handlerID = '".$_SESSION['qhid']."'";
       mysqli_query($conn, $sql);
       $_SESSION['qbodydim'] = $_REQUEST['newbodydimm'];
       $redirect = "Location:../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['updateadrs']))
   {
       include 'dbh.php';
       session_start();
   
       $sql = "UPDATE entityinfo SET address = '".$_REQUEST['newadrs']."' WHERE nttID = '".$_SESSION['qnttid']."' AND handlerID = '".$_SESSION['qhid']."'";
       mysqli_query($conn, $sql);
       $_SESSION['qaddres'] = $_REQUEST['newadrs'];
       $redirect = "Location:../entity-profile.php";
       header($redirect);
   }
   if(isset($_REQUEST['updatefrnds']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qfrnds'];
       $data = $_REQUEST['newfrnds'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?FriendsUpdated";
       header($redirect);
   }
   if(isset($_REQUEST['updatenemy']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qnemies'];
       $data = $_REQUEST['newnemy'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?EnemyAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatenik']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qnik'];
       $data = $_REQUEST['newnik'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?NickNameAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updateeid']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qemialid'];
       $data = $_REQUEST['neweid'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?EmailAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updateidno']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qidno'];
       $data = $_REQUEST['newidno'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?AccountIDAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updateknot']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qkey'];
       $data = $_REQUEST['newknot'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?KeynoteAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updaterltn']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qrltn'];
       $data = $_REQUEST['newrltn'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?RelationAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatecno']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qphone'];
       $data = $_REQUEST['newcno'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?ContactAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updateghbt']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qgood'];
       $data = $_REQUEST['newghbt'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?HabbitAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatesma']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qsma'];
       $data = $_REQUEST['newsma'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?SocialMediaAccountAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatebad']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qbad'];
       $data = $_REQUEST['newbad'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?HabbitAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatestrn']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qstrngth'];
       $data = $_REQUEST['newstrn'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?StrengthAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatewkns']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qwkns'];
       $data = $_REQUEST['newwkns'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?WeaknessAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatelks']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qlks'];
       $data = $_REQUEST['newlks'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?LikesAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatedlks']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qdlks'];
       $data = $_REQUEST['newdlks'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?DislikesAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updatemsc']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['qmisc'];
       $data = $_REQUEST['newmsc'];
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?MiscInfoAdded";
       header($redirect);
   }
   if(isset($_REQUEST['updateidt']))
   {
       include 'dbh.php';
       session_start();
       $file = "info/".$_SESSION['idt'];
       $data1 = $_REQUEST['newidt'];
       $data2 = $_REQUEST['newevent'];
       $data = $data1."$".$data2;
       file_put_contents("../".$file,"\n".$data,FILE_APPEND);
       $redirect = "Location:../entity-profile.php?Date_Added";
       header($redirect);
   }
   if(isset($_REQUEST['emdt']))
   {
       include 'dbh.php';
       session_start();
       $redirect = "Location:ud.html";
       header($redirect);
   }
   
   if(isset($_REQUEST['updatepic']))
   {
       include 'dbh.php';
       session_start();
       $flag = 0;
       if(isset($_FILES['newpic']))
       {
           $file = $_FILES['newpic'];
           $fileSize = $_FILES['newpic']['size'];
           $fileName = $_FILES['newpic']['name'];
           $filetmpname=$_FILES['newpic']['tmp_name'];
           $filetype = $_FILES['newpic']['type'];
           $fileError = $_FILES['newpic']['error'];
           $fileext = explode('.', $fileName);
           $fileActualExt = strtolower(end($fileext));
       }
       else{
           header("Location:../home.php?SelectAFile");
       }
       $allowed = array('jpg','jpeg','png');
       if(in_array($fileActualExt, $allowed))
       {
           echo "Type matched<br>";
           if($fileError===0)
           {
               if($fileSize < 20000000)
               {
                   $encodi = uniqid('',true);
                   $fileNameNew = $encodi.".".$fileActualExt;
                   $fileDestin1 = "entity-info/photo/".$fileNameNew;
                   $fileDestin = "../info/".$fileDestin1;
                   echo "test 2 pass";
                   move_uploaded_file($filetmpname, $fileDestin);
                   echo "Test 1 Pass";
               }
               else{
                   echo "Too big";
                   $flag = 0;
                   header("Location:../home.php?TooBigLn372updtinfo");
               }
           }
           else
           {
               echo "There was an error<br>";
               echo $fileError;
               header("Location:../home.php?ErrorLn378updtinfo");
           }
       }
       else
       {
           echo "PLEASE UPLOAD AN IMAGE FILE ONLY !!";
           header("Location:../addntt.php?imgOnly");
       }

            
       $handler = $_SESSION['id'];
       $nttName = $_SESSION['qname'];

       $ppPath = $fileDestin;

       $picdesc = $_REQUEST['picdesc']; 
        
       if($picdesc==null)
       {
           $picdesc = date('d-m-Y');
       }   

       $fileToUpdate = "../info/".$_SESSION['qphotos'];
       echo $fileToUpdate;
       $contentToPut = "\n".$fileDestin1."\n".$picdesc;
       
       $redirectingTo="Location: ../entity-profile.php?Please_Select_A_Photo_To_Add";

       if($file!=null)
       {
        file_put_contents($fileToUpdate,$contentToPut,FILE_APPEND);
        echo "Added";
        $redirectingTo="Location: ../entity-profile.php#testclassphoto";        
       }

       header($redirectingTo);
   }
   ?>