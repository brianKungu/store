<?php

	$conn=mysqli_connect("localhost","root","","mystore");
    

	$name=$_POST['name'];
    $contact=$_POST['contact'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];
    $query="INSERT INTO debtor(id,name,contact,item,quantity,cost) VALUES (NULL,'$name','$contact',$item','$quantity','$cost')";
    $insert=mysqli_query($conn,$query)or die(mysqli_error($conn));
    if(empty($name)){
        echo" Make sure all fields have been filled";
        exit();
    }
    if($insert){
        echo"<scipt>window.alert('success')</script>";
        header("refresh:0;url=deptorform.php");
    }else{
        echo"<script>window.alert('failed')</script>";
        header("refresh:0;url=deptorform.php");
    }

?>
