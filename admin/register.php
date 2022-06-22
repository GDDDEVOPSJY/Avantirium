<?php
$name=$_POST["name"];
$mailid=$_POST["mail"];
$password=$_POST["pass"];

$conn= new mysqli("localhost", "root", "","register");
if($conn->connect_error)
 echo"connection error: $conn->connect_error";


$insert_cmd = "INSERT into login VALUES('$name', '$mailid', '$password')";
$conn-> query($insert_cmd);

if($conn->affected_rows>0)
 echo"Values Inserted";
?>


