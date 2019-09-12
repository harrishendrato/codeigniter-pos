<div class="page-header">
	<h3>Report</h3>
</div>
<form method="post" action="<?php echo base_url().'user/report'?>">
	<div class="form-group">
		<label>Out of date</label>
		<input type="date" name="from" value="<?php echo set_value('from'); ?>" class="form-control">
		<?php echo form_error('from'); ?>
	</div>
	<div class="form-group">
		<label>Till date</label>
		<input type="date" name="untill" value="<?php echo set_value('untill'); ?>" class="form-control">
		<?php echo form_error('untill'); ?>
	</div>
	<div class="form-group">
		<input type="submit" value="search" name="cari" class="btn
		btn-sm btn-primary">
	</div>
</form>
<div class="btn-group">
	<a class="btn btn-warning btn-sm" href="<?php echo base_url().'user/report_pdf/?from='.set_value('from').'&untill='.set_value('untill') ?>"><span class="glyphicon glyphiconprint"></span> Print PDF</a>
	<a class="btn btn-default btn-sm" href="<?php echo base_url().'user/print_report/?from='.set_value('from').'&untill='.set_value('untill') ?>"><span class="glyphicon glyphiconprint"></span> Print</a>
</div>
<br/>
<br/>
<div class="table-responsive">
	<table border="1" class="table table-striped table-hover tablebordered" id="table-datatable">
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
			foreach ($sale_items as $si)
			{ 
				?> 
				<tr> 
					<td><?php echo $no++; ?></td>
					<td><?php echo "Rp. ".number_format($si->price); ?></td>
					<td><?php echo "Rp. ".number_format($si->subtotal); ?></td>
					<td><?php echo $si->product_id ?></td>
					<td><?php echo $si->sale_id ?></td>
					<td><?php echo date('d/m/Y','0000-00-00',current_timestamp($si->created_at)); ?></td>
					<td><?php echo date('d/m/Y','0000-00-00',current_timestamp($si->updated_at)); ?></td>
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
						<?php
						if($si->sale_id == "1"){
							echo "Selesai";
						}
						else
						{
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
</div>