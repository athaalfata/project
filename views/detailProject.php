<h3>Detail Project</h3>
<form>
<table class="table">
	<?php foreach ($project as $item) { ?>
	<tr>
		<td>Nama Project</td>
		<td>:</td>
		<td><?php echo $item->title ?></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>:</td>
		<td><?php echo $item->category_id ?></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><?php echo $item->body ?></td>
	</tr>
	<tr>
		<td>Budget</td>
		<td>:</td>
		<td>< Rp.10.000.000,-</td>
	</tr>
	<tr>
		<td>Skill yang dibutuhkan</td>
		<td>:</td>
		<td>Android, Java</td>
	</tr>
	<tr>
		<td>Waktu berakhir</td>
		<td>:</td>
		<td>18-01-2013</td>
	</tr>
	<tr>
		<td>Fitur-fitur</td>
		<td>:</td>
		<td>-</td>
	</tr>
	<tr>
		<td>Rata-rata Tawaran</td>
		<td>:</td>
		<td>Rp.7.000.000,-</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<div class="control-group">
			    <div class="controls">
			      <a class="btn btn-info" href="<?php echo site_url('project/project/biddingProject/'.$item->id) ?>">Bid !</a>
			      <a class="btn" href="<?php echo site_url('project/project/index') ?>">Back</a>
			    </div>
			</div>
		</td>	
	</tr>
</table>

<table class="table">
	<tr>
		<th>No</th>
		<th>Nama Bidder</th>
		<th>Tawaran Harga</th>
		<th>Waktu Bidding</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Widianto Gilang</td>
		<td>Rp. 7.500.000,-</td>
		<td>12-01-2013</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Rini Wijayanti</td>
		<td>Rp. 6.500.000,-</td>
		<td>11-01-2013</td>
	</tr>
	<?php } ?>
</table>

</form>

