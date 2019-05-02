<?php
session_start();
if (!isset($_SESSION['user_id']) && $_SESSION['user_id']==true) {
 header('Location:https://localhost/mystore/index.php');
}else{
	
}
//require_once('processlogin.php');
?>