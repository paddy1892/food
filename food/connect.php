<?php

$user = "pmccarney03";
$webserver = "localhost";

include("password.php");

$db = "pmccarney03";

$conn = mysqli_connect($webserver, $user, $password, $db);

if(!$conn) {
    die("connection failed".mysqli_error());
}