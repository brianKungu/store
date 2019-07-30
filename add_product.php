<?php include('navbar.php')?>
<?php include('sidebar.php')?>

 <script>
    function validate(){
        
        var product=document.myform.product.value;
        var productName=document.myform.productname.value;
        var qauntity=document.myform.quantity.value;
        var dateDelivered=document.myform.date.value;
        var supplier=document.myform.supplier.value;
    
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
        if (supplier==""){
            alert("Supplier name is required!");
            return false;
        }

    }
</script>
<!-- <script>
    function validate(){
        options=['product','productName','quantity','dateDelivered','supplier'];
        for(var i=0;i<options.length;i++){
            field=options[i];
            value=document.myform[field].value;
            if(value==""){
                alert("input" +field+ "is required!");
            }
        }

    }




</script> -->
<div class="content">
<form method="POST" name="myform" action="addproduct.php" onsubmit="return validate()">
<h3 >Add Product</h3>
    <div class="container-fluid">    
        <div class="card">
        <div class="col-md-8">
                <div class="row">
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Delivered</label>
                                <input type="date"  class="form-control" placeholder="1/1/2019" name="date" >
                        </div>
                    </div>    

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Supplier</label>
                            <input type="text"  class="form-control" placeholder="Unileaver" name="supplier" >
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