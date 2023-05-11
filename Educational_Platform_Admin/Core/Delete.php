<?php
include("config.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE  FROM lecturers Where id=$id ";
    $result=mysqli_query($connection, $sql);
    if($result){
        echo "deleted ";
        header("Location: ../View/View_Lecturers.php");
    }
    else{
        die(mysqli_error($connection));
    }
}
?>