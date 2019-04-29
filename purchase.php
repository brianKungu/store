<?php

	$conn=mysqli_connect("localhost","root","","mystore");
	$item=$_POST['item'];
	$quantity=$_POST['quantity'];
	$cost=$_POST['cost'];
	$date=$_POST['date'];

	$select="INSERT INTO purchase(id,item,quantity,cost,date_sold) VALUES (NULL,'$item','$quantity','$cost','$date')";
	$insert=mysqli_query($conn,$select);

	if($insert){
		echo "<script>window.alert('success')</script>";
		header('refresh:0;url=purchaselist.php');
	}else{
		echo "<script>window.alert('failed')</script>";
		header('refresh:0;url=purchaselist.php');
	}



?>