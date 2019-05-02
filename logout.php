<?php
include('index.php');
//require_once('connect.php');
session_destroy();
header("refresh:0;url=index.php");
echo "Logging out successful";
?>