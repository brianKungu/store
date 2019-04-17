<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="container-fluid"><br>
    <button class="btn btn-success"><i class="fas fa-plus"></i><a href="add_product_invoice.php">Add Product</a></button><br>
    <br>
        <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Purchase Records</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
	                    <table class="table table-bordered">
	                    	<thead>
	                    		<th>ID</th>
	                    	</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
</div>

<?php include('footer.php')?>