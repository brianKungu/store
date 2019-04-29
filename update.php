
<?php include('navbar.php')?>
<?php include('sidebar.php');?>

<?php
include('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM stock WHERE id='$id'";
    $select_query=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($select_query)){
        $id=$row['id'];
        $name=$row['product'];
        $product_name=$row['product_name'];
                
        $quantity=$row['quantity'];
        $date_delivered=$row['date_delivered'];
        $supplier=$row['supplier'];

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>
	input[type=text], select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>

<body>

<div class="container">
  <h2 class="text-center">Update Record</h2>
  <form class="form-horizontal" action="" method="POST">
  
    <div class="form-group">
      <label class="control-label col-sm-2" >Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"   name="id" value="<?php echo $id;?>" readOnly>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"   name="product" value="<?php echo $name;?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Item:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="product_name" value="<?php echo $product_name;?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Quantity:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="quantity" value="<?php echo $quantity;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Date Delivered:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="date_delivered"  value="<?php echo $date_delivered;?>">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2">Supplier:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="supplier"  value="<?php echo $supplier;?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
        <input type="submit" name="update" class="btn btn-success" value="Update">
      </div>
    </div>
           
     
        
      
   

	</form>
</div>
</body>
</html>
<?php
  include('connect.php');
  if(isset($_POST['update'])){
  	    $name=$_POST['product'];
        $product_name=$_POST['product_name'];
        $quantity=$_POST['quantity'];
        $date_delivered=$_POST['date_delivered'];
        $supplier=$_POST['supplier'];
     
     $queryupdate=mysqli_query($conn,"update stock set product='$name',product_name='$product_name',quantity='$quantity',date_delivered='$date_delivered',supplier='$supplier' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("Record updated successfully")</script>';
        echo('<meta http-equiv="refresh" content="0">');
        } else{
        echo'<script>window.alert("Record not updated. Please try again.")</script>';
        header('refresh:0;url=update.php');			
        }
  }
?>
<?php include('footer.php');?>

