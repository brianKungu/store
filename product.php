<?php include('connect.php')?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="content">
    <div class="container-fluid">
	<button class="btn btn-success"><a href="add_product1.php">Add Product</a></button><br>
	<br>
        <div class="row">
		
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
						<table class="table table-bordered">
							<thead>
								<th>ID</th>
								<th>Name</th>
								<th>Action</th>
							</thead>
							<tbody>
								<?php
								$select="SELECT * FROM product ";
								$select_query=mysqli_query($conn,$select);
								while ($row=mysqli_fetch_array($select_query)) {
									# code...
								

								?>
								<td><?php echo $row{'id'}?></td>
								<td><?php echo $row{'name'}?></td>
								<?php echo "<td> <a href='Update4.php?id=".$row['id']."' class='btn btn-success btn-sm'>Update</a>"?> </td>
							</tbody>
							<?php
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>



<?php include('footer.php')?>