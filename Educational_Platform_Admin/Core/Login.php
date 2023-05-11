<?php
include("config.php");
if(isset($_POST["submit"])){

    $userEmail = mysqli_real_escape_string($connection, $_POST["email"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    if($userEmail != "" && $password != ""){
        //Check are entered username and password matched
        $sql = "SELECT * FROM admins WHERE email = '$userEmail' AND password = '$password'";
        
        if(mysqli_num_rows(mysqli_query($connection, $sql)) == 1){
            
            header("Location: ../View/register.php");
            exit();
        }else{
            echo 0;
        }
    }
    }
    ?>