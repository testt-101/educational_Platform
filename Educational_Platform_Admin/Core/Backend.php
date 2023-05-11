<?php
include("config.php");
if(isset($_POST["submit"])){
    $username=mysqli_real_escape_string($connection,$_POST["Name"]);
	$password=mysqli_real_escape_string($connection,$_POST["password"]);
	$email=mysqli_real_escape_string($connection,$_POST["email"]);
    $Hours=mysqli_real_escape_string($connection,$_POST["Office_Hours"]);
    $Type=mysqli_real_escape_string($connection,$_POST["Type"]);
    if($username != "" && $password != ""){
        //Check is the username has not taken
        if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM Lecturers WHERE Email = '$email'")) == 0){
            mysqli_query($connection, "INSERT INTO Lecturers (Name,Email ,Password ,Type ,Office_Hours) VALUES ('$username','$email' ,'$password','$Type','$Hours')");
            echo "Regitering new account: Username " . $username . " and password: " . $password;
            header("Location: ../View/register.php");
        }
		else{
            echo "This Username is not available. Please use another username.";
        }     
		
	
}
}
?>