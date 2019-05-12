<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="content">
	<form method="POST" action="" name="myform" onsubmit="return validate()">
	<h3 >Add Supplier</h3>
	    <div class="container-fluid">    
	        <div class="card">
	        <div class="col-md-8">
	                <div class="row">
	                    <div class="col-md-5">
	                        <div class="form-group">
	                            <label>Name</label>
	                            <input type="text" class="form-control" placeholder="Andrew" name="name" >
	                        </div>
	                    </div>
	                    <div class="col-md-5">
	                        <div class="form-group">
	                            <label>Company</label>
	                            <input type="text" class="form-control" placeholder="sony sugar" name="company" >
	                        </div>
	                    </div>

	                    <div class="col-md-2">
	                        <div class="form-group">
	                            <label>Contact</label>
	                            <input type="text" class="form-control" placeholder="0724" name="contact" >
	                        </div>
	                    </div>
	                </div>
	                    
	                </div>
	               
	                </div>
	                <input type="submit" name="submit" value="submit" class="btn btn-info ">
	                <br>
	                
	        </div>        
	        </div>
	    </div> 
	    

	</form>
</div>        
        
                 <div class="clearfix"></div>     
<?php  include('footer.php')?>