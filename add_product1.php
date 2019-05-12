<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<script>
    function validate(){
        
        var product=document.myform.product.value;
        
    
        if (product==""){
            alert("A product is required!");
            return false;
        }
        

    }
</script>
<div class="content">
    <form method="POST" name="myform" action="addproduct1.php" onsubmit="return validate()">
    <h3 >Add Product</h3>
        <div class="container-fluid">    
            <div class="card">
            <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Product</label>
                                <input type="text" class="form-control" placeholder="unga,sukari" name="product" >
                                <input type="submit" name="submit" value="submit" class="btn btn-info ">
                            </div>
                        </div>
                    
                    <br>
                    
            </div>        
            </div>
        </div>    
    </form>
</div>
<?php include('footer.php')?>