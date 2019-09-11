<div class="page-header"> 
	<h3>Product Data</h3> 
</div> 

<a href="<?php echo base_url().'user/product_add'; ?>" class="btn btn-sm btn-primary"><span class='glyphicon glyphicon-plus'></span> New Product</a>
<br/> 
<br/> 
<div class="table-responsive"> 
	<table class="table table-bordered table-hover table-striped" id="table-datatable"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Name</th> 
				<th>Price</th> 
				<th>Category ID</th> 
				<th>Created at</th> 
				<th>Updated at</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			$no = 1; 
			foreach($products as $p){ 
				?> 
				<tr> 
					<td><?php echo $no++; ?></td> 
					<td><?php echo $p->name ?></td> 
					<td><?php echo $p->price ?></td> 
					<td><?php echo $p->category_id ?></td> 
					<td><?php echo $p->created_at ?></td> 
					<td><?php echo $p->updated_at ?></td> 
					<td> 
						<a class="btn btn-sm btn-warning" href="<?php echo base_url().'user/product_edit/'.$p->id; ?>"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
						<a class="btn btn-sm btn-danger" href="<?php echo base_url().'user/product_delete/'.$p->id; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a> 
					</td> 
				</tr> 
				<?php 
			} 
			?> 
		</tbody>
	</table> 
</div>