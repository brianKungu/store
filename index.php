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
                  password:<input type="password" name="password" required>
                  </div>
                  <input type="submit" name="submit" value="submit">
      </div>
                </form>
              </div>
    </div>            
  </body>
</html>
<?php
    session_start();
$conn=mysqli_connect("localhost","root","","mystore") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
  $username=$_POST['username'];
    $password=$_POST['password'];
    
    
  $admin=mysqli_query($conn,"select * from users where username='$username'and password='$password'")or die(mysqli_error($conn));
    
  $row2=mysqli_num_rows($admin);
  
    if($row2==1){
    while($rows2=mysqli_fetch_array($admin)){
      $_SESSION['username']=$rows2['username'];
      $_SESSION['password']=$rows2['password'];
     

    }
  }else{
    ?>
    <script>
      alert("Log In Failed");
      window.location.href='index.php';
  </script>
  <?php
  }
}
?>

