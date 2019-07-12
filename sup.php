<?php
include('connect.php');
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$company=$_POST['company'];
$contact=$_POST['contact'];
$query="INSERT INTO supplier(id,name,company,contact)VALUES(NULL,'$name','$company','$contact')";
$insert=mysqli_query($conn,$query);
if ($insert) {
	echo'<script>window.alert("success")</script>';
		header("refresh:0;url=supplier.php");
	}else{
		echo'<script>window.alert("failed")</script>';
		header("refresh:0;url=supplier.php");
	}
}




?>