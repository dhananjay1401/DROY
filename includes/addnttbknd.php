<?php

if(isset($_REQUEST['submit']))
{   
    include 'dbh.php';
    session_start();

    if(isset($_FILES['imgfile']))
    {
        $file = $_FILES['imgfile'];
        $fileSize = $_FILES['imgfile']['size'];
        $fileName = $_FILES['imgfile']['name'];
        $filetmpname=$_FILES['imgfile']['tmp_name'];
        $filetype = $_FILES['imgfile']['type'];
        $fileError = $_FILES['imgfile']['error'];
        $fileext = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileext));
    }
    else
    {
        header("Location:../home.php?SelectAFile");
    }  

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed))
    {
        echo "Type matched<br>";
        
        if($fileError===0)
        {
            if($fileSize < 10000000)
            {
                $encodi = uniqid('',true);
                $fileNameNew = $encodi.".".$fileActualExt;
                
                $fileDestin1 = "entity-info/profilephoto/".$fileNameNew;
                $fileDestin = "../info/".$fileDestin1;
                echo "test 2 pass";
                move_uploaded_file($filetmpname, $fileDestin);
                echo "Test 1 Pass";
            }
            else{
                echo "Too big";
            }
        }
        else
        {
            echo "There was an error<br>";
            echo $fileError;
        }
    }
    else
    {
        echo "PLEASE UPLOAD AN IMAGE FILE ONLY !!";
        header("Location:../addntt.php?imgOnly");
    }
    $handler = $_SESSION['id'];
    $nttName = $_REQUEST['nttname'];
    $ppPath = $fileDestin1;
    
    $fn1 = "entity-info/badits/".$nttName."U".$encodi.".txt";
    $fn2 = "entity-info/number/".$nttName."U".$encodi.".txt";
    $fn3 = "entity-info/dlks/".$nttName."U".$encodi.".txt";
    $fn4 = "entity-info/emid/".$nttName."U".$encodi.".txt";
    $fn5 = "entity-info/enmis/".$nttName."U".$encodi.".txt";
    $fn6 = "entity-info/frnd/".$nttName."U".$encodi.".txt";
    $fn7 = "entity-info/goodit/".$nttName."U".$encodi.".txt";
    $fn8 = "entity-info/knot/".$nttName."U".$encodi.".txt";
    $fn9 = "entity-info/lks/".$nttName."U".$encodi.".txt";
    $fn10 = "entity-info/misc/".$nttName."U".$encodi.".txt";
    $fn11 = "entity-info/nik/".$nttName."U".$encodi.".txt";
    $fn12 = "entity-info/rltn/".$nttName."U".$encodi.".txt";
    $fn13 = "entity-info/photo/".$nttName."U".$encodi.".txt";
    $fn14 = "entity-info/idno/".$nttName."U".$encodi.".txt";
    $fn15 = "entity-info/sma/".$nttName."U".$encodi.".txt";
    $fn16 = "entity-info/strength/".$nttName."U".$encodi.".txt";
    $fn17 = "entity-info/wkns/".$nttName."U".$encodi.".txt";
    $fn18 = "entity-info/impDates/".$nttName."U".$encodi.".txt";
    
    $filename1 = "../info/".$fn1;
    $filename2 = "../info/".$fn2;
    $filename3 = "../info/".$fn3;
    $filename4 = "../info/".$fn4;
    $filename5 = "../info/".$fn5;
    $filename6 = "../info/".$fn6;
    $filename7 = "../info/".$fn7;
    $filename8 = "../info/".$fn8;
    $filename9 = "../info/".$fn9;
    $filename10 = "../info/".$fn10;
    $filename11 = "../info/".$fn11;
    $filename12 = "../info/".$fn12;
    $filename13 = "../info/".$fn13;
    $filename14 = "../info/".$fn14;
    $filename15 = "../info/".$fn15;
    $filename16 = "../info/".$fn16;
    $filename17 = "../info/".$fn17;
    $filename18 = "../info/".$fn18;

    $myfile1 = fopen($filename1,"w") or die("Unable to open file");
    fclose($myfile1);
    $myfile2 = fopen($filename2,"w") or die("Unable to open file");
    fclose($myfile2);
    $myfile3 = fopen($filename3,"w") or die("Unable to open file");
    fclose($myfile3);
    $myfile4 = fopen($filename4,"w") or die("Unable to open file");
    fclose($myfile4);
    $myfile5 = fopen($filename5,"w") or die("Unable to open file");
    fclose($myfile5);
    $myfile6 = fopen($filename6,"w") or die("Unable to open file");
    fclose($myfile6);
    $myfile7 = fopen($filename7,"w") or die("Unable to open file");
    fclose($myfile7);
    $myfile8 = fopen($filename8,"w") or die("Unable to open file");
    fclose($myfile8);
    $myfile9 = fopen($filename9,"w") or die("Unable to open file");
    fclose($myfile9);
    $myfile10 = fopen($filename10,"w") or die("Unable to open file");
    fclose($myfile10);
    $myfile11 = fopen($filename11,"w") or die("Unable to open file");
    fclose($myfile11);
    $myfile12 = fopen($filename12,"w") or die("Unable to open file");
    fclose($myfile12);
    $myfile13 = fopen($filename13,"w") or die("Unable to open file");
    fclose($myfile13);
    $myfile14 = fopen($filename14,"w") or die("Unable to open file");
    fclose($myfile14);
    $myfile15 = fopen($filename15,"w") or die("Unable to open file");
    fclose($myfile15);
    $myfile16 = fopen($filename16,"w") or die("Unable to open file");
    fclose($myfile16);
    $myfile17 = fopen($filename17,"w") or die("Unable to open file");
    fclose($myfile17);
    $myfile18 = fopen($filename18,"w") or die("Unable to open file");
    fclose($myfile18);

    $tempdob = "29-02-2000";
    $sql = "INSERT INTO 
    entityinfo(handlerID, name, dateofbirth,profilephoto, contactnumber, keynotes, enemies, friends, photos, relations, impIDnos,
    badhabbit, goodhabbit, miscinfo, nicknames,socialmediaacc,emailid,weakness,strength,dislike,likes,impDates) VALUES 
    ('".$handler."','".$nttName."','".$tempdob."','".$ppPath."','".$fn2."','".$fn8."','".$fn5."','".$fn6."','".$fn13."','".$fn12."',
    '".$fn14."','".$fn1."','".$fn7."','".$fn10."','".$fn11."','".$fn15."','".$fn4."','".$fn17."','".$fn16."', 
    '".$fn3."','".$fn9."','".$fn18."')";
    mysqli_query($conn, $sql);

    $redirectTo = "Location:../wall.php?Added";
    header($redirectTo);
}
?>