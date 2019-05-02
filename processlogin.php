<?php

$conn=mysqli_connect("localhost","root","","mystore") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
	$admin=mysqli_query($conn,"select * from users where username='$username'and password='$password'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
			
			$_SESSION['pass']=$rows2['password'];
			$_SESSION['user']=$rows2['username'];
    		?>
            <script>window.alert("Success");
            window.location.href='admin.php';
            </script>
            <?php
		}
	}else{
	?>
	<script>
	    window.alert("failed");
	    window.location.href='index.php';
	</script>
	<?php
	}
}

?>