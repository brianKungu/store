<?php
$conn=mysqli_connect("localhost","root","","mystore") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
  $username=$_POST['username'];
    $password=$_POST['password'];
    
    
  $admin=mysqli_query($conn,"select * from users where username='$username'and password='$password'")or die(mysqli_error($conn));
    
  $row=mysqli_num_rows($admin);
  if($row==1){
  	while($rows2=mysqli_fetch_array($admin)){
  
    $_SESSION['pass']=$rows2['password'];
	$_SESSION['user']=$rows2['username'];
	$_SESSION['user_id'] = $rows2['id'];
  $_SESSION['user_id'] = true;
    		
            
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