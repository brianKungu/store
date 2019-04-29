<?php include('connect.php');?>
<?php include('navbar.php')?>
<?php include('sidebar.php');?>

<script>
    function validate(){
        var name=document.myform.name.value;
        var item=document.myform.item.value;
        var quantity=document.myform.quantity.value;
        var cost=document.myform.cost.value;

        if(name==""){
            alert("Debtor's name is required!");
            return false;
        }
        if(item==""){
            alert("Item borrowed is required!");
        }
        if(quantity==""){
            alert("Quantity of product is required!");
        }
        if(cost==""){
            alert("Amount is required!");
        }
    }

</script>
<div class="container">
	<form class="form-horizontal" name="myform" method="POST" action="deb.php" onsubmit="return validate()">
        <h3>Add Debtor</h3>
		<div class="container-fluid" style="margin-top: 2px;">    
        <div class="card">
            <div class="col-md-8">
                    <div class="row" style="margin: 2px;">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="James" name="name" >
                            </div>
                        </div>
                        <div class="col-md-2">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" placeholder="2000" name="contact" >
                                </div>
                            
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Item</label>
                                <input type="text" class="form-control" placeholder="roaster" name="item" >
                            </div>
                        </div>
                    </div>
                    <div  class="row" style="margin: 2px;">
    	                    <div class="col-md-5">
    	                       <div class="form-group">
    	                            <label>Quantity</label>
    	                            <input type="text" class="form-control" placeholder="" name="quantity" >
    	                        </div>
    	                    </div>
    	                
    	                <div class="col-md-2">
    	                        <div class="form-group">
    	                            <label>Cost</label>
    	                            <input type="text" class="form-control" placeholder="2000" name="cost" >
    	                        </div>
    	                    
    	                </div>

                    </div>
        			</div>
        			
                    
    					
    				
                </div>
                
            </div>
            <div class="row" style="margin: 4px;">
                    <input type="submit" name="submit" value="submit" class="btn btn-info ">
                </div>
        </div>
    </div>
	</form>
</div>

<?php include('footer.php');?>

