<?php 
	$connection=mysqli_connect('localhost','root','','egm_barcodes');
	$name=$_POST['name'];
	$sql="INSERT INTO tbl_products (name)
						values ('$name')";
	$result=mysqli_query($connection,$sql);
	$id=mysqli_insert_id($connection);//get last added id.
	$code=$id.date('is');//milisecond
	$sql="UPDATE tbl_products 
			SET code='$code'
			WHERE product_id='$id'";
	$result=mysqli_query($connection,$sql);
	header("Location:../index.php");
 ?>
