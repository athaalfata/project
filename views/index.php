<form class="form-search pull-right">
  <div class="input-append">
    <input type="text" class="span2 search-query">
    <button type="submit" class="btn">Search</button>
  </div>
</form>
<h3>Daftar Project</h3><br/>
<div class="pull-right">
<strong>Urut berdasarkan :</strong> 
	<form>
	  <input type="radio" name="optionsRadios" value="option1" checked>
	  Nama Project
	  <input type="radio" name="optionsRadios" value="option2">
	  Budget
	  <input type="radio" name="optionsRadios" value="option2">
	  Sisa Waktu
	  <button type="submit" class="btn">Urutkan</button>
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
			<td>< 5.000.000,- </td>
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