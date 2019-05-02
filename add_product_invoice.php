<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<script>
    function validate(){
        var receipt=document.myform.receipt.value;
        var product=document.myform.product.value;
        var productName=document.myform.productname.value;
        var qauntity=document.myform.quantity.value;
        var dateDelivered=document.myform.date.value;
        var cost=document.myform.cost.value;
        var supplier=document.myform.supplier.value;
        var contact=document.myform.contact.value;
        if (receipt==""){
            alert("Input Receipt no.!");
            return false;
        }
        if (product==""){
            alert("A product is required!");
            return false;
        }
        if (productName==""){
            alert("Product Name is required!");
            return false;
        }
        if (qauntity==""){
            alert("Quantity of product is required!");
            return false;
        }
        if (dateDelivered==""){
            alert("Date of issue is a requirement!");
            return false;
        }
        if (cost==""){
            alert("Cost of item brought is required!");
            return false;
        }
        if (supplier==""){
            alert("Supplier name is required!");
            return false;
        }
        if (contact==""){
            alert("Supplier's phonenumber is required!");
            return false;
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
                            <input type="text" class="form-control" placeholder="unga,sukari" name="product" >
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
                            <div class="form-group">
                                <label>Supplier</label>
                                <input type="text"  class="form-control" placeholder="Unileaver" name="supplier" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                                <label>Contact</label>
                                <input type="text"  class="form-control" placeholder="0724" name="contact" >
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