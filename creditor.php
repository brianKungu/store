<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="container-fluid"><br>
    <button class="btn btn-success"><i class="fas fa-plus"></i><a href="creditorsform.php">Add Creditor</a></button><br>
    <br>
        <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Creditor Records</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                    	<thead>
                    		<th>Id</th>
                    		<th>Name</th>
                    		<th>Item</th>
                    		<th>Quantity</th>
                    		<th>Amount</th>
                    		<th>Contact</th>
                    		<th>Date issued</th>
                    	</thead>
                    	<tbody>
                    		<div class="body">
                    			<?php
                    			$select="SELECT * FROM creditor";
                    			$select_query=mysqli_query($conn,$select);
                    			while ($row=mysqli_fetch_array($select_query)){


                    			?>
                    			<tr>
                    				<td><?php echo $row{'id'}?></td>
                    				<td><?php echo $row{'name'}?></td>
                    				<td><?php echo $row{'item'}?></td>
                    				<td><?php echo $row{'quantity'}?></td>
                    				<td><?php echo $row{'amount'}?></td>
                    				<td><?php echo $row{'contact'}?></td>
                    				<td><?php echo $row{'date_issued'}?></td>
                    				<td><?php echo $row{'status'}?></td>

                    			</tr>
                    			<?php
                    				}
                    			?>
                    		</div>

                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    
</div>
<?php include('footer.php') ?>