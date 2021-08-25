<?php
error_reporting(0);
$con = new mysqli('localhost','root','','test');

if(!$con){
    die("Connection Failed");
}
  $name=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'diff'));
  $pass=mysqli_real_escape_string($con,filter_input(INPUT_POST, 'multi'));


  $stat=$con->prepare("INSERT into  Project (Email,Password) values(?,?)");
  $stat->bind_param("ss", $name,$pass);
  mysqli_execute($stat);
  $stat->close();
  $con->close();

  

     
?>