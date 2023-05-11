<?php
include("config.php");
if(isset($_POST["newAccountUsername"])){
	$username=mysqli_real_escape_string($connection,$_POST["newAccountUsername"]);
	$password=mysqli_real_escape_string($connection,$_POST["newAccountPassword"]);
	$email=mysqli_real_escape_string($connection,$_POST["newAccountEmail"]);
	if($username != "" && $password != ""){
        //Check is the username has not taken
        if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM students WHERE Email = '$email'")) == 0){
            mysqli_query($connection, "INSERT INTO students (Name,Email ,Password) VALUES ('$username','$email' ,'$password')");
            echo "Regitering new account: Username " . $username . " and password: " . $password;
        }
		else{
            echo "This Username is not available. Please use another username.";
        }     
		
	//echo"testing ".$username." and testing".$email." and ".$password;
}
else
{
        echo "Both fields are required.";
    }

}
else if(isset($_POST["loginEmail"])){
    $userEmail = mysqli_real_escape_string($connection, $_POST["loginEmail"]);
    $password = mysqli_real_escape_string($connection, $_POST["loginPassword"]);
    if($userEmail != "" && $password != ""){
        //Check are entered username and password matched
        $sql = "SELECT * FROM students WHERE Email = '$userEmail' AND password = '$password'";
        
        if(mysqli_num_rows(mysqli_query($connection, $sql)) == 1){
            $query=mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($query)){
                echo $row['Name'];
            }
           
        }else{
            echo 0;
        }
    }else{
        echo "Both fields are required.";
    }
}
else if(isset($_POST["submit"])){
    $username=mysqli_real_escape_string($connection,$_POST["Name"]);
	$password=mysqli_real_escape_string($connection,$_POST["password"]);
	$email=mysqli_real_escape_string($connection,$_POST["email"]);
    $Hours=mysqli_real_escape_string($connection,$_POST["Office_Hours"]);
    $Type=mysqli_real_escape_string($connection,$_POST["Type"]);
    if($username != "" && $password != ""){
        //Check is the username has not taken
        if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM Lecturers WHERE Email = '$email'")) == 0){
            mysqli_query($connection, "INSERT INTO Lecturers (Name,Email ,Password ,Type ,Office_Hours) VALUES ('$username','$email' ,'$password','$Hours','$Type')");
            echo "Regitering new account: Username " . $username . " and password: " . $password;
        }
		else{
            echo "This Username is not available. Please use another username.";
        }     
		
	//echo"testing ".$username." and testing".$email." and ".$password;
}
}

?>