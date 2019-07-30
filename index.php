
<?php

session_start();

$conn=mysqli_connect("localhost","root","","mystore") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=md5(mysqli_real_escape_string($conn,$_POST['password']))
    ;
    
    
  $admin=mysqli_query($conn,"select * from users where username='$username'and password='$password'")or die(mysqli_error($conn));
    
  $row=mysqli_num_rows($admin);
  if($row==1){
  	while($rows2=mysqli_fetch_array($admin)){
  
    $_SESSION['pass']=$rows2['password'];
  	$_SESSION['user']=$rows2['username'];
  	$_SESSION['user_id'] = $rows2['id'];
    $_SESSION['user_id'] = true;
    // $passwordhash=password_hash($password, PASSWORD_DEFAULT);
            
     }
     ?>
     
     <script>window.alert("Success");
            window.location.href='admin.php';
            </script>
            <?php
   }else{
   	?>
   	<script>
   	window.alert("Failed");
   	window.location.href='index.php';
   	</script>
   	<?php
   }
   }
    ?>
<html>
  <head>
    <title></title>
      <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    ////<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="bootstrap/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/style.css" rel="stylesheet" />

  </head>
  <body>
    
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
      	
                <h3><i>Administrator</i></h3>
                
                <form name="login-form" action="" method="POST" >
                
                  <div class="form-group">
                  <input type="text" name="username" placeholder="Enter your username!"><br>
                  </div>
                  <div class="form-group">
                  <input type="password" name="password" placeholder="Enter your password!">
                  </div>
                  <input type="submit" name="submit" value="login">
      </div>
                </form>
              </div>
    </div>            
  </body>
</html>

    
      
  

