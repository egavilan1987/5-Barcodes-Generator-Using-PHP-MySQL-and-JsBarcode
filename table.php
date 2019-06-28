<?php 
$connection=mysqli_connect('localhost','root','','egm_barcodes');
$sql="SELECT * FROM tbl_products";
$result=mysqli_query($connection,$sql);

// Array to store the codes
$arrayBarcodes=array();
?>
<div class="row">
	<div class="col-sm-12">
		<table class="table" align="conter">
			<tr>
				<td>Product Name</td>
				<td>Barcode</td>
			</tr>
			<?php 
			while($row=mysqli_fetch_row($result)):
				$arrayCodigos[]=(string)$ver[2]; 
				?>
				<tr>
					<td><?php echo $row[1] ?></td>
					<td>
						<svg id='<?php echo "barcode".$row[2]; ?>'>
						</td>
					</tr>
				<?php endwhile; ?>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function arrayjsonbarcode(j){
			json=JSON.parse(j);
			arr=[];
			for (var x in json) {
				arr.push(json[x]);
			}
			return arr;
		}
		jsonvalor='<?php echo json_encode($arrayBarcodes) ?>';
		values=arrayjsonbarcode(jsonvalor);

		for (var i = 0; i < values.length; i++) {
			JsBarcode("#barcode" + values[i], values[i].toString(), {
				format: "codabar",
				lineColor: "#000",
				width: 2,
				height: 30,
				displayValue: true
			});
		}
	</script>
