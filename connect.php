<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mystore";
$conn=mysqli_connect('localhost','root','','mystore');
if ($conn){
    echo"sucess";
}else{
    echo"failed";
}

?>