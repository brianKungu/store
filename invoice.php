<?php include('connect.php');
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['user_id']===true) {
}else{
        header('Location:https://localhost/mystore/index.php');

}
?>

<?php include('sidebar.php') ?>
<?php include('navbar.php') ?>
<div class="container-fluid"><br>
    <button class="btn btn-success"><a href="add_product_invoice.php">Add Product</a></button><br>
    <br>
        <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Invoice Records</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                        
                    <thead>
                        <th>ID</th>
                        <th>Receipt no.</th>
                        <th>Product Id</th>
                        
                        <th>Quantity</th>
                        <th>Cost</th>
                        <th>Supplier</th>
                        <th>Contact</th>
                        <th>date_delivered</th>
                        
                    </thead>
                <div class="body">
                    <tbody>
                        <?php
                                $select="SELECT * FROM invoice";
                                $select_query=mysqli_query($conn,$select);
                                while($row=mysqli_fetch_array($select_query)){ 
                        ?>
                            <tr>
                                <td><?php echo $row{'id'}?></td>
                                <td><?php echo $row{'receipt'}?></td>
                                <td><?php echo $row{'product_id'}?></td>
                                
                                <td><?php echo $row{'quantity'}?></td>
                                <td><?php echo $row{'cost'}?></td>
                                 <?php echo "<td> <a href='record.php?id=".$row['id']."' class='btn btn-success btn-sm'>view</a>"?> 
                                
                                <td><?php echo $row{'contact'}?></td>
                                <td><?php echo $row{'date_delivered'}?></td>
                                


                                
                                    
                            </tr>
                            
                        
                        
                            <?php
                                    }
                            ?>
            

                    </tbody>
                </div>    
                </div>
            </div>
        </div>
    </table>
</div>    
</div>
</div>    
</div>    

<?php include('footer.php') ?>