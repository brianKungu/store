<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","mystore");
    $db=mysqli_select_db($conn,"mystore");
    $receipt=$_POST['receipt'];
    $product=$_POST['product'];
    $productname=$_POST['productname'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];
    $datedelivered=$_POST['date'];
    $supplier=$_POST['supplier'];
    $contact=$_POST['contact'];
    $query= "INSERT INTO invoice(id,receipt,product,product_name,quantity,cost,date_delivered,supplier,contact) VALUES(NULL,'$receipt', '$product','$productname','$quantity','$cost','$datedelivered','$supplier','$contact')";
    $insert=mysqli_query($conn, $query);
    if($insert){
        echo'<script>window.alert("success")</script>';
        header('refresh:0;url=invoice.php');
    }else{
        echo'<script>window.alert("failed")</script>';
        header('refresh:0;url=invoice.php');
    }

}
?>