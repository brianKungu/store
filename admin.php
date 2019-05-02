
<?php include('connect.php');
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['user_id']===true) {
}else{
	 	header('Location:https://localhost/mystore/index.php');

}
//require_once('processlogin.php');
?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<?php include('content.php')?>
<?php include('footer.php')?>

