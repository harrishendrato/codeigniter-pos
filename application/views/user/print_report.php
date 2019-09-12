<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">.table-data{
		width: 100%;
		border-collapse: collapse;
	}
	.table-data tr th,
	.table-data tr td{
		border:1px solid black;
		font-size: 10pt;
	}
</style>
<h3>Sales report</h3>
<table>
	<tr>
		<td>Out of date</td>
		<td>:</td>
		<td><?php echo date('d/m/Y',strtotime($_GET['from'])); ?></td>
	</tr>
	<tr>
		<td>Till date</td>
		<td>:</td>
		<td><?php echo date('d/m/Y',strtotime($_GET['untill'])); ?></td>
	</tr>
</table>
<br/>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>  
			<th>Price</th>
			<th>Subtotal</th> 
			<th>Product ID</th>
			<th>Sale ID</th>
			<th>Created at</th> 
			<th>Updated at</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1; 
		foreach($sale_items as $si){ 
			?> 
			<tr> 
				<td><?php echo $no++; ?></td>
				<td><?php echo "Rp. ".number_format($si->price); ?></td>
				<td><?php echo "Rp. ".number_format($si->subtotal); ?></td>
				<td><?php echo $si->product_id ?></td>
				<td><?php echo $si->sale_id ?></td>
				<td><?php echo date('d/m/Y',strtotime($si->created_at)); ?></td>
				<td><?php echo date('d/m/Y',strtotime($si->updated_at)); ?></td>
				<td>
					<?php
					if($si->updated_at =="0000-00-00")
					{
						echo "-";
					}
					else
					{
						echo date('d/m/Y',strtotime($si->updated_at));
					}
					?>
				</td>
				<td>
					<?php echo "Rp. ".number_format($si->subtotal)." ,-"; ?>
				</td>
				<td>
					<td>
						<?php
						if($si->sale_id == "1"){
							echo "Selesai";
						}else{
							echo "-";
						}
						?>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>