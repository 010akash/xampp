<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'onlinebookstore';
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    echo "Connection Successful";
}else{
    die( "No Connection" . mysqli_connect_error());
}
?>