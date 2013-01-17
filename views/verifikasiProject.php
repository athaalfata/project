<h3>Verifikasi Project</h3>
<form action="simpanProject" method="post">
	<?php

		echo form_hidden('namaProject',$namaProject);
		echo form_hidden('kategori',$kategori);
		echo form_hidden('deskripsi',$deskripsi);
		echo form_hidden('budget',$budget);
		echo form_hidden('type','regular');

	?>
<table class="table">
	<tr>
		<td>Nama Project</td>
		<td>:</td>
		<td><?php echo $namaProject ?></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>:</td>
		<td><?php echo $kategori ?></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><?php echo $deskripsi ?></td>
	</tr>
	<tr>
		<td>Skill yang dibutuhkan</td>
		<td>:</td>
		<td>
			<ul>
			<?php foreach($skill as $skil){?> 
			<li><?php echo $skil; }?></li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>Waktu berakhir</td>
		<td>:</td>
		<td>18-01-2013</td>
	</tr>
	<tr>
		<td>Fitur-fitur</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Budget</td>
		<td>:</td>
		<td><?php echo $budget ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<div class="control-group">
			    <div class="controls">
			      <input type="submit" class="btn btn-info" name="okSimpan" value="OK">
			      <input type="submit" class="btn btn-danger" name="backTambah" value="Back">
			    </div>
			</div>
		</td>	
	</tr>
</table>
</form>