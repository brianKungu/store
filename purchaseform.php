<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>

<script>
        function validate(){
          var item= document.myform.item.value;
          var quantity= document.myform.quantity.value;
          var cost= document.myform.cost.value;
          var dateSold= document.myform.date.value;

          if(item==""){
            alert("An item is required in this field!");
            return false;
          }
          if(quantity==""){
            alert("Quantity of product is required!");
            return false;
          }
         
          if(dateSold==""){
            alert("Date description is required!");
            return false;
          }
        }
 </script>
<div class="content">
<form method="POST" name="myform" action="purchase.php" onsubmit="return validate()">
	<h3 >Add Product </h3>
    <div class="container-fluid" style="margin-top: 2px;">    
        <div class="card">
	        <div class="col-md-8">
	                <div class="row" style="margin: 2px;">
	                    <div class="col-md-5">
	                        <div class="form-group">
	                            <label>Item</label>
	                            <input type="text" class="form-control" placeholder="unga,sukari" name="item" >
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                    	<label>Quantity</label>
	                    	<input type="text" class="form-control" name="quantity" placeholder="25">
	                    </div>
	                </div>    
	                 	<div class="row" style="margin:2px;">
	                 		<div class="col-md-5">
	                 			<label>Cost</label>
	                 			<input type="text" class="form-control" name="cost" placeholder="sh.250">
	                 		</div>
	                 		<div class="col-md-5">
	                 			<label>Date_sold</label>
	                 			<input type="date" class="form-control" name="date" placeholder="1/1/2019">
	                 		</div>
	                 	</div>
	                <div class="row"  style="margin: 2px;">
	                	<input type="submit" value="submit" class="btn btn-info" name="sumbit">
	                </div>
	            </div>
	                
            </div>

        </div>

    </form>
</div>
<?php include('footer.php')?>