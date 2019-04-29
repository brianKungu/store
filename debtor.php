<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="content">
    <div class="container-fluid"><br>
        <button class="btn btn-success"><a href="deptorform.php">Add Debtor</a></button><br>
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
                                <th>Name</th>
                                <th>Contact</th>
                        		<th>Item</th>

                        		<th>Quantity</th>
                        		<th>Cost</th>
                                <th>Date issued</th>
                                <th>Action</th>
                        	</thead>
                        	<tbody>
                        		<?php
                        			$select="SELECT * FROM debtor";
                        			$select_query=mysqli_query($conn,$select);
                        			while ($row=mysqli_fetch_array($select_query)) {
                        		?>	

                        		<tr>
                        			<td><?php echo $row{'id'}?></td>
                                    <td><?php echo $row{'name'}?></td>
                                    <td><?php echo $row{'contact'}?></td>
                        			<td><?php echo $row{'item'}?></td>
                        			<td><?php echo $row{'quantity'}?></td>
                        			<td><?php echo $row{'cost'}?></td>
                                    <td><?php echo $row{'date'}?></td>

                                    <?php echo "<td> <a href='update1.php?id=".$row['id']."' class='btn btn-success btn-sm'>update</a> 
                                    <a href='delete1.php?id=".$row['id']."'class='btn btn-danger btn-sm'>delete</a>"?>
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
</div>
<?php include('footer.php')?>