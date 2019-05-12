<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<?php
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$select="SELECT * FROM product WHERE id='$id'";
	$select_query=mysqli_query($conn,$select);
	while ($row=mysqli_fetch_array($select_query)) {
		$id=$row['id'];
		$product=$row['name'];
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
        <input type="text" class="form-control"   name="name" value="<?php echo $product;?>">
      </div>
    </div>
    <div class="col-sm-offset-2 col-sm-10">
        
      
        <input type="submit" class="btn btn-success"   name="update" value="update">
      </div>
    
</form>
</div>
</body>
</html>
<?php
  include('connect.php');
  if(isset($_POST['update'])){
  	$product=$_POST['name'];

  	    
        
     
     $queryupdate=mysqli_query($conn,"update product set name='$product'where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("Record updated successfully")</script>';
        echo('<meta http-equiv="refresh" content="0">');
        } else{
        echo'<script>window.alert("Record not updated. Please try again.")</script>';
        header('refresh:0;url=update4.php');			
        }
  }
?>


<?php include('footer.php')?>