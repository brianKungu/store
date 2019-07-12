<?php 
require('connect.php');
include('sidebar.php');
include('navbar.php');

if(ISSet($_GET['id'])){
$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT receipt,supplier,product_id,date_delivered from invoice WHERE id='$id' ");

 $invoices=[];
while ($row=mysqli_fetch_assoc($query)) {
	 $invoices[]=[
		$receipt=$row{'receipt'},
		$uid=$row{'id'},
		$supplier=$row{'supplier'},
		$product_id=$row{'product_id'},
		$date_delivered=$row{'date_delivered'},
	];
	
}

}

?>
<!-- <?php
echo($id)," ",($receipt)," ",($supplier)," ",($product_id);
?>  -->
  <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
				
							
								
				Id:<input type="text"  name="id" value="<?php echo $id;?>" readonly>
				Receipt no.:<input type="text" name="receipt" value="<?php echo $receipt;?>">
				Supplier Name:<input type="text" name="receipt" value="<?php echo $supplier;?>">
				Product Id:<input type="text" name="receipt" value="<?php echo $product_id;?>">
				Date delivered:<input type="text" name="receipt" value="<?php echo $date_delivered;?>">
			
				

			</div>
		</div>
		</div>
	</div>
</body>


</html>  	
