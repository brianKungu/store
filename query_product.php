<?php

require "connect.php";

$query = mysqli_query($conn,"select id,name from product");

$products = [];
while ($row=mysqli_fetch_array($query)) {
 	
 	$products[] = [
 		'id' => $row{'id'},
 		'name' => $row{'name'},
 	];
 } 

