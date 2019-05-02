<table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>>Dakota Rice</td>
                                        	<td
                                        	<td>1</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>


    <?php
if(isset($_POST['submit'])){

    $conn=mysqli_connect("localhost","root","","mystore");
    

    $name=$_POST['name'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];
    $query="INSERT INTO debtor(id,name,item,cost) VALUES (NULL,'$name','$item','$quantity','$cost')";
    $insert=mysqli_query($conn,$query)or die(mysqli_error($conn));
    if($insert){
        echo"<scipt>window.alert('success')</script>";
        header("refresh:0;url=deptorform.php");
    }else{
        echo"<script>window.alert('failed')</script>";
        header("refresh:0;url=deptorform.php");
    }
}
?>
<script>
    function validate(){
        var product=document.myform.product.value;
        if (product==""){
            alert("A name is required for this field!");
            return false;
        }
    }
</script>//


 if(isset($_POST['submit'])){
      $conn=mysqli_connect("localhost","root","","mystore") or die(mysqli_error($conn));
      $username=$_POST['username'];
      $password=$_POST['password'];
      $select_query=mysqli_query($conn,"select * from users where username='$username' and password='$password' ")or die(mysqli_error($conn));
      if($select_query){
        echo"success";
        header('refresh:0; url=admin.php');
      }else{
        echo"failed";
        header('refresh:0;url=index.php');
      }
    }




    <html>
  <head>
    <title></title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="styles/style.css" rel="stylesheet" />

  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
                <form name="login-form" action="login.php" method="POST">
                <legend>
                  <fieldset><i>Login</i></fieldset>
                </legend>
                  <div class="form-group">
                  username:<input type="text" name="username"><br>
                  </div>
                  <div class="form-group">
                  password:<input type="password" name="password" required>
                  </div>
                  <input type="submit" name="submit" value="Login">
      </div>
                </form>
              </div>
    </div>            
  </body>
</html>
<?php
if (!isset($_SESSION['user_id'])) {
  header('Location:https://localhost/mystore/index.php');
}else{
  header('Location:https://localhost/mystore/admin.php');
}
require('processlogin.php');

?>
if($row==1){
      while ($rows=mysqli_fetch_array($admin)) {
        $_SESSION['loginid']=$rows['id'];
      }
       echo"<script>window.alert('success')</script>";
       header('refresh:0;url=admin.php');
    }else{
      echo"<script>window.alert('failed')</script>";
       header('refresh:0;url=index.php');