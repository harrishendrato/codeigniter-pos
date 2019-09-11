<div class="page-header"> 
	<h3>New Customer</h3> 
</div> 

<form action="<?php echo base_url().'user/customer_add_act' ?>" method="post"> 
	<div class="form-group"> 
		<label>Customer Name</label> 
		<input type="text" name="name" class="form-control"> 

		<?php echo form_error('name'); ?>
		</div> 
		<div class="form-group"> 
			<label><Address></Address></label> 
			<textarea name="address" class="form-control"></textarea> 
		</div> 
		<div class="form-group"> 
			<label>Created at</label> 
			<input type="timestamp" name="created_at" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Updated at</label> 
			<input type="timestamp" name="updated_at" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<input type="submit" value="Save" class="btn btn-primary"> 
		</div>
</form>