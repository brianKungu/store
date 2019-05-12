<?php 
require 'connect.php';
$query=mysqli_query($conn,"select id,name from supplier");
$suppliers=[];
while ($row=mysqli_fetch_array($query)) {
	$suppliers[]=[
		'id'=>$row{'id'},
		'name'=>$row{'name'},
	];

}
?>