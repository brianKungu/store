<?php include('connect.php')?>
<?php include('navbar.php')?>
<?php include('sidebar.php')?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$query=$_GET['query'];

$min_length=7;
if (strlen($query)) {
	$query=htmlspecialchars($query);
	$query=mysqli_real_escape_string($conn,$query);

	$raw_results=mysqli_query($conn,"SELECT * invoice WHERE ('title' LIKE '%".$query."%') OR ('text' LIKE '%".$query."%')")or die(mysqli_error($conn));
	if (mysqli_num_rows($raw_results)>0) {
		while ($results=mysqli_fetch_array($raw_results)) {
			echo"<p><h3>".$results['title']."</h3>".$results['text']."</p>";
		}
			
		}else{
			echo('No results');
		}
	}else{
		echo"Minimum length is".$min_length;
	}
	
?>
</body>
</html>
<?php include('footer.php')?>