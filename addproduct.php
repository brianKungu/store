<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","mystore");
    $db=mysqli_select_db($conn,"mystore");

    $product=$_POST['product'];
    $productname=$_POST['productname'];
    $quantity=$_POST['quantity'];
    $datedelivered=$_POST['date'];
    $supplier=$_POST['supplier'];
    $query= "INSERT INTO stock(id,product,product_name,quantity,date_delivered,supplier) VALUES(NULL, '$product','$productname','$quantity','$datedelivered','$supplier')";
    $insert=mysqli_query($conn, $query);
    if($insert){
        echo'<script>window.alert("success")</script>';
        header('refresh:0;url=admin.php');
    }else{
        echo'<script>window.alert("failed")</script>';
    }

}
?>