<div class="page-header"> 
	<h3>Category Lis</h3> 
</div> 

<a href="<?php echo base_url().'user/category_add'; ?>" class="btn btn-sm btn-primary"><span class='glyphicon glyphicon-plus'></span> New Category</a>
<br/> 
<br/> 
<div class="table-responsive"> 
	<table class="table table-bordered table-hover table-striped" id="table-datatable"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Name</th> 
				<th>Created at</th> 
				<th>Updated at</th>
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			$no = 1; 
			foreach($categories as $c){ 
				?> 
				<tr> 
					<td><?php echo $no++; ?></td> 
					<td><?php echo $c->name ?></td> 
					<td><?php echo $c->created_at ?></td> 
					<td><?php echo $c->updated_at ?></td>
					<td> 
						<a class="btn btn-sm btn-warning" href="<?php echo base_url().'user/category_edit/'.$c->id; ?>"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
						<a class="btn btn-sm btn-danger" href="<?php echo base_url().'user/category_delete/'.$c->id; ?>"><span class="glyphicon glyphicon-trash"></span> delete</a> 
					</td> 
				</tr> 
				<?php 
			} 
			?> 
		</tbody>
	</table> 
</div>