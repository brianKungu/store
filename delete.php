<?php
include_once('connect.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query=("delete FROM stock WHERE id='$id'")or die(mysqli_error($conn));
	$select_query=mysqli_query($conn,$query);
	if($query){
		echo "<script>window.alert('delete successfull')</script>";
		header('refresh:0;url=admin.php');
	}else{
		echo "<script>window.alert('delete Failed')</script>";
		header('refresh:0;url=admin.php');
	}
}
?>
