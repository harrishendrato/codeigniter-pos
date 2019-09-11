<div class="page-header">
<h3>Customer Edit</h3>
</div>
<?php foreach($customers as $cts){ ?>
<form action="<?php echo base_url().'user/customer_update' ?>"
method="post">
<div class="form-group">
<label>Customer Name</label>
<input type="text" name="name" value="<?php echo $cts->name; ?>" class="form-control">
<input type="hidden" name="id" value="<?php echo $cts->id; ?>" class="form-control">
<?php echo form_error('name'); ?>
</div>
<div class="form-group">
<label>Address</label>
<textarea name="address" class="form-control"><?php echo
$cts->address; ?></textarea>
</div>
<div class="form-group">
<label>Created at</label>
<input type="timestamp" name="created_at" value="<?php echo $cts->created_at; ?>" class="form-control">
</div>
<div class="form-group">
<label>Update at</label>
<input type="timestamp" name="updated_at" value="<?php echo $cts->updated_at; ?>" class="form-control">
</div>
<div class="form-group">
<input type="submit" value="Save" class="btn btn-primary">
</div>
</form>
<?php } ?>