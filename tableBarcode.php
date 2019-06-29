<?php

$connection=mysqli_connect('localhost','root','','egm_barcodes');
$sql="SELECT * FROM tbl_products";
$result=mysqli_query($connection,$sql);

		//declaramos arreglo para guardar codigos
$arrayBarcodes=array();
?>

<div class="row">
	<div class="col-sm-12">
		<table class="table table-sm">
			<tr>
				<th scope="col">#</th>
                <th scope="col">Prodcut Name</th>
                <th scope="col">Barcode</th>
                <th scope="col">Created Date</th>
			</tr>
			<?php 
			while($ver=mysqli_fetch_row($result)):
				$arrayBarcodes[]=(string)$ver[2]; 
				?>
				<tr>
					<td><?php echo $ver[0] ?></td>
					<td><?php echo $ver[1] ?></td>
					<td>
						<svg id='<?php echo "barcode".$ver[2]; ?>'>
					</td>
					<td><?php echo $ver[3] ?></td>
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