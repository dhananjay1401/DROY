<?php

if(isset($_REQUEST['signin-submit'])){

    include 'dbh.php';

    $sql="SELECT * FROM users WHERE email = '".$_REQUEST['emailin']."'";
    $result=mysqli_query($conn, $sql);
    $result=mysqli_fetch_array($result);

    if(strcmp($result['email'],$_REQUEST['emailin'])==0)
        {
                         $querry = "SELECT * FROM users WHERE email = '".$_REQUEST['emailin']."'";
                         $result2 = mysqli_query($conn,$querry) or die( mysqli_error($conn));
                         $result2 = mysqli_fetch_array($result2);
                         $password = $result2['password'];
                         $redirect = "Location: ../index.php";
        
            if(strcmp($password,$_REQUEST['pwd-in'])==0)
                {
                    echo "logged in";

                    session_start();

                    $_SESSION['id']=$result2['id'];
                    $_SESSION['email']=$result2['email'];
                    $_SESSION['name']=$result2['name'];
                    $_SESSION['password']=$result2['password'];
                    $_SESSION['contact_number']=$result2['contact_number'];
                    
                    $redirect = "Location: ../home.php";
                    mail2();
                    echo header($redirect);
                }
                else 
                {
                    echo "wrong password";
                    header($redirect);
                }
        }
            else
            {
                    echo "wrong email";
                    header($redirect);
            }
}
function mail2()
{
    $to = 'srv.tanay@gmail.com';
    $subject = 'TROYAI Logged IN';
    $message = 'This is a test';
    $headers = "Auto Generated By TroyAI \r\n";
    
    if (mail($to, $subject, $message, $headers)) 
    {
        echo "SUCCESS";
    } 
    else 
    {
        echo "ERROR";
    }
    return 0;
}
?>
