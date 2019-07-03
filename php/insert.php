<?php 
	// connect to the egm_barcodes database.
	$connection=mysqli_connect('localhost','root','','egm_barcodes');
	
	$name=$_POST['name'];

	$sql="INSERT INTO tbl_products (name, created) VALUES ('$name',NOW())";

	$result=mysqli_query($connection,$sql);

	// get the last id
	$id=mysqli_insert_id($connection);

	// millisecond
	$code=$id.date('is');

	$sql="UPDATE tbl_products SET code='$code' WHERE product_id='$id'";

	$result=mysqli_query($connection,$sql);

	// redirecto to index.php
	header("Location:../index.php");
 ?>