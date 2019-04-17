<?php include('connect.php')?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="container-fluid"><br>
    <button class="btn btn-success"><i class="fas fa-plus"></i><a href="add_product_invoice.php">Add Debtor</a></button><br>
    <br>
        <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Debtor Records</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                    	<thead>
                    		<th>Id</th>
                    		<th>Item</th>
                    		<th>Quantity</th>
                    		<th>Cost</th>
                    	</thead>
                    	<tbody>
                    		<?php
                    			$select="SELECT * FROM debtor";
                    			$select_query=mysqli_query($conn,$select);
                    			while ($row=mysqli_fetch_array($select_query)) {
                    		?>	

                    		<tr>
                    			<td><?php echo $row{'id'}?></td>
                    			<td><?php echo $row{'item'}?></td>
                    			<td><?php echo $row{'quality'}?></td>
                    			<td><?php echo $row{'cost'}?></td>

                    		</tr>

                    		
                    		<?php	
                    			}
                    		?>
                    		</
                    		
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    
</div>
<?php include('footer.php')?>