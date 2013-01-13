<h3>Bidding Project</h3>
<form action="<?php echo site_url('project/project/simpanTawaran') ?>" method="post">
<table class="table">
	<?php foreach ($project as $item) { ?>
	<?php
		echo form_hidden('id_project',$item->id);
		echo form_hidden('id_user',1);
	?>
	<tr>
		<td>Nama Project</td>
		<td>:</td>
		<td><?php echo $item->title ?></td>
	</tr>
	<tr>
		<td>Budget</td>
		<td>:</td>
		<td>< Rp.10.000.000,-</td>
	</tr>
	<tr>
		<td>Tawaran Anda</td>
		<td>:</td>
		<td>Rp. <input type="text" placeholder="Tawaran Anda" name="tawaran"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<div class="control-group">
			    <div class="controls">
			      <input type="submit" class="btn btn-info" value="Bid !" name="bid">
			      <a class="btn" href="<?php echo site_url('project/project/index')?>">Back</a>
			    </div>
			</div>
		</td>	
	</tr>
	<?php } ?>
</table>
</form>