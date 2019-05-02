<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>

<div class="container-fluid"><br>
    <button class="btn btn-success"><a href="purchaseform.php">Add Product</a></button><br>
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
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Cost</th>
                                <th>Date sold</th>
                                <th>Action</th>
	                    	</thead>
                            <tbody>
                                <?php
                                $select="SELECT * FROM purchase";
                                $query=mysqli_query($conn,$select);
                                while ($row=mysqli_fetch_array($query)){?>
                                <tr>
                                    <td><?php echo $row{'id'}?></td>
                                    <td><?php echo $row{'item'}?></td>
                                    <td><?php echo $row{'quantity'}?></td>
                                    <td><?php echo $row{'cost'}?></td>
                                    <td><?php echo $row{'date_sold'}?></td>


                                     <td>
                                        <a href="update3.php?id=<?php echo $row['id'];?>" class='btn btn-success btn-sm'>update</a>
                                        <a  href='delete3.php?id=<?php echo $row['id'] ;?>' class='btn btn-danger btn-sm'>delete</a>
                                      </td>

                                </tr> 
                                <?php
                                    }
                                ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</div>

<?php include('footer.php')?>