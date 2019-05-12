<?php
if (isset($_POST['submit'])) {
	$conn=mysqli_connect("localhost","root","","mystore")or die($conn);
	$product=$_POST['product'];
	$query="INSERT INTO product(id,name)VALUES(NULL,'$product')";
	$insert=mysqli_query($conn,$query);
	if($insert){
        echo'<script>window.alert("success")</script>';
        header('refresh:0;url=product.php');
    }else{
        echo'<script>window.alert("failed")</script>';
        header('refresh:0;url=product.php');
    }
}



?>
