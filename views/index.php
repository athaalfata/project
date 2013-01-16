<form class="form-search pull-right" action=<?php echo base_url('project/project/cariProject') ?> method="post">
  <div class="input-append">
    <input type="text" class="span2 search-query" name="keyword">
    <input type="submit" class="btn" value="Search">
  </div>
</form>
<h3>Daftar Project</h3><br/>
<div class="pull-right">
<strong>Urut berdasarkan :</strong> 
	<form action="<?php echo base_url('project/project/urutProjectTitle') ?>" method="post">
	  <input type="radio" name="optionsRadios" value="nama" checked>
	  Nama Project
	  <input type="radio" name="optionsRadios" value="budget">
	  Budget
	  <input type="radio" name="optionsRadios" value="time">
	  Sisa Waktu
	  <input type="submit" class="btn" value="Urutkan" name="sort">
	</form>
</div>
<table class="table">
	<tr>
		<th>No</th>
		<th>Nama Project</th>
		<th>Kategori</th>
		<th>Type</th>
		<th>Budget</th>
		<th>Sisa Waktu</th>
		<th>Detail</th>
	</tr>
	<?php $i = 1 ; foreach ($project as $item) { ?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $item->title ?></td>
			<td><?php echo $item->category_id ?></td>
			<td><?php echo $item->type ?></td>
			<td><?php echo $item->budget_id ?></td>
			<td>1 hari 13 jam</td>
			<td><a href="<?php echo site_url('project/project/detailProject/'.$item->id) ?>">lihat</a></td>
		</tr>
	<?php $i++; } ?>
</table>
<div class="pagination">
  <ul>
    <li><?php echo $this->pagination->create_links(); ?></li>
  </ul>
</div>