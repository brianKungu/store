<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<?php include('query_product.php')?>
<?php include('query_supplier.php')?>

<script>

    function validate(){
        
        


        product_details = ['receipt','product','qauntity','dateDelivered','cost','supplier'];

        for (var i = 0 ; i<product_details.length; i++) {

            field = product_details[i];

            value = document.myform[field].value;
            if(value == ""){
                alert("Input "+field+" is required!");
            return false;
            }
        }
    }
    </script>
 
<div class="content">
<form method="POST" action="add_receipt.php" name="myform" onsubmit="return validate()">
<h3 >Add Invoice</h3>
    <div class="container-fluid">    
        <div class="card">
        <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Receipt</label>
                            <input type="text" class="form-control" placeholder="123764" name="receipt" >
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Product</label>

                            <select class="form-control" name="product">
                                <?php foreach ($products as $key => $product) {
                                    echo "<option value=".$product['id'].">".$product['name']."</option>";
                                }
                                ?>
                            </select>


                           <!--  <input type="text" class="form-control" placeholder="unga,sukari" name="product" > -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" placeholder="closeup" name="productname" >
                        </div>
                    </div>
                
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" class="form-control" placeholder="2kg" id="quantity" name="quantity">
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date Delivered</label>
                                <input type="date"  class="form-control" placeholder="1/1/2019" name="date" >
                        </div>
                    </div>   
                        <div class="col-sm-3"> 
                        <div class="form-group">
                                <label>Cost</label>
                                <input type="text"  class="form-control" placeholder="30000" name="cost" >
                        </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group" name="supplier">
                                <label>Supplier</label>
                                <select class="form-control">
                                <?php foreach ($suppliers as $key => $supplier) {
                                    echo "<option value=".$supplier['id'].">".$supplier['name']."</option>";
                                }
                                ?>
                            </select>

                               <!--  <input type="text"  class="form-control" placeholder="Unileaver" name="supplier" > -->
                            </div>
                        </div>
                        <div class="form-group">
                        
                        
                        
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