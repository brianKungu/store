<?php
if(isset($_POST['submit'])){
	$conn=mysqli_connect("localhost","root","","mystore");
    

	$product=$_POST['product'];
	$item=$_POST['item'];
	$quantity=$_POST['quantity'];
	$amount=$_POST['amount'];
	$contact=$_POST['contact'];
	$date_issued=$_POST['date'];
	$status=$_POST['status'];
	$query="INSERT INTO creditor(id,name,item,quantity,amount,contact,date_issued,status) VALUES (NULL,'$product','$item','$quantity','$amount','$contact','$date_issued','$status')";
	$insert=mysqli_query($conn,$query);
	if($insert){
		echo'<script>window.alert("success")</script>';
		header("refresh:0;url=creditor.php");
	}else{
		echo'<script>window.alert("failed")</script>';
		header("refresh:0;url=creditor.php");
	}
}
?>
