<?php 

	$connection=mysqli_connect('localhost','root','','egm_barcodes');
	
	$name=$_POST['name'];

	$sql="INSERT INTO tbl_products (name, created)
						VALUES ('$name',NOW())";
	$result=mysqli_query($connection,$sql);

	$id=mysqli_insert_id($connection);//obtenemos el ultimo id agregado
	$code=$id.date('is');//milisegundos
	$sql="UPDATE tbl_products 
			set code='$code'
			where product_id='$id'";
	$result=mysqli_query($connection,$sql);

	header("Location:../index.php");
 ?>