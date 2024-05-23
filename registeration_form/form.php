<?php


//  if(isset($_GET(`msg`))){
//     $msg=$_GET[`msg`];
//     if($msg ==1){
//         echo '<div role="alert" class="text-danger">This email is already registered</div>';
//     }

//  }




require_once("connection.php");

if(isset($_POST['subform'])){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwored = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

   

   
$sqlcheck = "SELECT * FROM `user_rgistration_form` WHERE `email` = '$email'";

if($result= $conn->query($sqlcheck)){
    if(mysqli_num_rows($result)>0){
        header('location: index.php?msg=1');


    
    }
    else
    {
        echo"recored inserted";
    }
        $sqlreg="INSERT INTO `user_rgistration_form` (`id`, `name`, `username`, `email`, `password`,`role`) VALUES (DEFAULT, '$name', '$username','$email','$passwored',`0`)";

         if($conn->querry($sqlreg)){

                echo "User Registered";
            }
            else
                {
                echo "error:" .$conn->error;
              }
        }
        else{
            echo $conn->error;
        }
    }






?>







    
    
