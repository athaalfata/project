<h3>Fitur Project</h3>
<form  action="cekSubmit" method="post">
<table class="table">
	<tr>
		<th></th>
		<th>Nama Fitur</th>
		<th>Deskripsi Fitur</th>
		<th>Harga</th>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="1"></td>
		<td>Fitur Project</td>
		<td>Project yang disertai Fitur akan dibuat lebih menarik, sehingga Kualitas hasil biddingnya akan lebih baik pula. Project akan ditampilkan secara mencolok di halaman Beranda.</td>
      	<td>Rp.19.000,-</td>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="2"></td>
		<td>Project Urgent</td>
		<td>Project tersebut akan mendapatkan tanggapan yang lebih cepat dari para FreeLancer, bahkan project anda dapat dimulai dalam jangka waktu 24 jam!</td>
		<td>Rp.19.000,-</td>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="3"></td>
		<td>Hidden Project</td>
		<td>Saya ingin menyembunyikan rincian project pada Search Engine dan User yang belum melakukan Log in. Fitur ini direkomendasikan untuk project-project yang harus dirahasiakan.</td>
		<td>Rp.49.000,-</td>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="4"></td>
		<td>Project Komisi</td>
		<td>Project ini dipublikasikan untuk merekrut orang-orang dengan berbasiskan komisi(Contohnya Sales).Tak ada gaji tambahan untuk employer atau worker, termasuk Komisi project.</td>
		<td>Rp.95.000,-</td>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="5"></td>
		<td></td>
		<td>I want Freelancers to digitally sign a Non-Disclosure Agreement before placing a bid. Freelancers agree to keep details discussed through private messages and files confidential</td>
		<td>Rp.95.000,-</td>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="6"></td>
		<td>Komunikasi Offline Online</td>
		<td>Saya ingin proses seleksi yang dilakukan terhadap Employer berupa Online dan Offline.</td>
		<td>Rp.-,-</td>
	</tr>
	<tr>
		<td><input type="checkbox" value="" name="7"></td>
		<td>Project Terverifikasi</td>
		<td>Saya ingin para bidder project ini adalah bidder yang terverifikasi.</td>
		<td>Rp.15.000,-</td>
	</tr>
  </div>
</table>
<?php

echo form_hidden('namaProject',$namaProject);

?>
<div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-info" name="nextVerifikasi" value="Next">
      <input type="submit" class="btn btn-danger" name="backRegular" value="Back">
    </div>
</div>
</form>