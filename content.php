<div class="content">
            <div class="container-fluid">
			<button class="btn btn-success"><a href="add_product.php">Add Product</a></button><br>
			<br>
                <div class="row">
				
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Stock Records</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
							<table class="table table-bordered">
							<thead>
								<tr>
									<th>id</th>
									<th>product</th>
									<th>product_name</th>
									<th>quantity</th>
									<th>date_delivered</th>
									<th>supplier</th>
									<th>action</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
									$select="SELECT * FROM stock";
									$select_query=mysqli_query($conn,$select);
									while($row=mysqli_fetch_array($select_query)){ 
								?>
								<tr>
									<td><?php echo $row{'id'}?></td>
									<td><?php echo $row{'product'}?></td>
									<td><?php echo $row{'product_name'}?></td>
									<td><?php echo $row{'quantity'}?></td>
									<td><?php echo $row{'date_delivered'}?></td>
									<td><?php echo $row{'supplier'}?></td>


									<?php echo "<td> <a href='view.php?id=".$row['id']."' class='btn btn-success btn-sm'>view</a> 
									<a  href='delete1.php?id=". $row['id'] ."' class='btn btn-danger btn-sm'>delete</a>  
										<a href='update1.php?id=". $row['id'] ."' class='btn btn-primary btn-sm'>update</a></td>";?>
								</tr>
								
							
							</tbody>
							<?php
									}
							?>
				

		
								</table>	
	

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>
