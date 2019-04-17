<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="content">
<form method="POST" action="cred.php">
	<h3 >Add Creditor</h3>
    <div class="container-fluid" style="margin-top: 2px;">    
        <div class="card">
        <div class="col-md-8">
                <div class="row" style="margin: 2px;">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Product name</label>
                            <input type="text" class="form-control" placeholder="unga,sukari" name="product" >
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Item</label>
                            <input type="text" class="form-control" placeholder="" name="item" >
                        </div>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" class="form-control" placeholder="" name="quantity" >
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 2px;">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" placeholder="2000" name="amount" >
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" placeholder="07..." name="contact" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date Issued</label>
                            <input type="date" class="form-control" placeholder="1/1/2013" name="date" >
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 2px;">
                	<div class="col-md-5">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" placeholder="delivered/not delivered" name="status" >
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 2px;">
					<input type="submit" name="submit" value="submit" class="btn btn-info ">
				</div>
</form>
</div>
<?php include('footer.php')?>