<?php
session_start();

include("../connect.php");

$uname = $_POST["userfield"];

$pass = $_POST["passfield"];

$checkuser = "SELECT * FROM foodusers WHERE user='$uname' AND password='$pass'";

$userresult = mysqli_query($conn, $checkuser) or die(mysqli_error($conn));

mysqli_close($conn);

if(mysqli_num_rows($userresult) > 0) {
    
    $_SESSION["food_40155617"] = $uname;
    
    header("Location: index.php");
}else{
    header("Location: login.php");
    
}

?>

