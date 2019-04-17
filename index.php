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
                <form name="login-form" action="" method="POST">
                <legend>
                  <fieldset><i>Login</i></fieldset>
                </legend>
                  <div class="form-group">
                  username:<input type="text" name="username"><br>
                  </div>
                  <div class="form-group">
                  password:<input type="password" name="password">
                  </div>
                  <input type="submit" name="submit" value="Login">
      </div>
                </form>
              </div>
    </div>            
  </body>
</html>
<?php
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
?>

