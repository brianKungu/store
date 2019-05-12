<?php include('navbar.php')?>
<?php include('sidebar.php')?>



<?php 
include('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM debtor WHERE id='$id'";
    $select_query=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($select_query)){
        $id=$row['id'];
        $name=$row['name'];
        $contact=$row['contact'];
        $item=$row['item'];
         $quantity=$row['quantity'];
        $cost=$row['cost'];
        $date=$row['date'];


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
input[type=date], select {
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
      <label class="control-label col-sm-2" >id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="id" value="<?php echo $id;?>" readOnly>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"   name="name" value="<?php echo $name;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Contact:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="contact"  value="<?php echo $contact;?>">
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Item:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="item" value="<?php echo $item;?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Quantity:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="quantity" value="<?php echo $quantity;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Cost:</label>
      <div class="col-sm-10">
        <input type="text" rows="4" cols="50" autofocus name="cost"  value="<?php echo $cost;?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Date:</label>
      <div class="col-sm-10">
        <input type="date" rows="4" cols="50" autofocus name="date"  value="<?php echo $date;?>">
      </div>
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
  	    $name=$_POST['name'];
        $contact=$_POST['contact'];
        $item=$_POST['item'];
        $quantity=$_POST['quantity'];
        $cost=$_POST['cost'];
        $date=$_POST['date'];
     
     $queryupdate=mysqli_query($conn,"update debtor set name='$name',contact='$contact',item='$item',quantity='$quantity',cost='$cost',date='$date' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("Record updated successfully")</script>';
        echo('<meta http-equiv="refresh" content="0">');
        } else{
        echo'<script>window.alert("Record not updated. Please try again.")</script>';
        header('refresh:0;url=update1.php');			
        }
  }
?>
<?php include('footer.php');?>