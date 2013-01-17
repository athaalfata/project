<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Posting Project</title>
    <style type="text/css">
        body { font-family:Lucida Sans, Arial, Helvetica, Sans-Serif; font-size:13px; margin:20px;}
        #main { width:960px; margin: 0px auto; border:solid 1px #b2b3b5; -moz-border-radius:10px; padding:20px; background-color:#f6f6f6;}
        #header { text-align:center; border-bottom:solid 1px #b2b3b5; margin: 0 0 20px 0; }
        fieldset { border:none;}
        legend { font-size:18px; margin:0px; padding:10px 0px; color:#b0232a; font-weight:bold;}
        label { display:block; margin:15px 0 5px;}
        input[type=text], input[type=password] { width:300px; padding:5px; border:solid 1px #000;}
        .prev, .next { background-color:#b0232a; padding:5px 10px; color:#fff; text-decoration:none;}
        .prev:hover, .next:hover { background-color:#000; text-decoration:none;}
        .prev { float:left;}
        .next { float:right;}
        #steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        #makeWizard { background-color:#b0232a; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        #makeWizard:hover { background-color:#000;}
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    <script type="text/javascript" src="formToWizard.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
        });
    </script>
</head>
<body>
    <div id="main">
        <div id="header">
            <p><a id="makeWizard" href="<?php echo site_url('project/project/index')?>" onclick="MakeWizard()">Klik disini untuk kembali ke jendela Project.</a>
        </div>
        <form id="SignupForm" action="<?php echo site_url('project/project/verifikasiProjectTrial')?>" method="post">
            <fieldset>
                <legend>Informasi Project</legend>
                <label for="Name">Nama</label>
                <input id="Name" type="text" name="namaProject" />
                <div class="control-group">
    				<label class="control-label" for="inputKategori">Kategori</label>
    				<div class="controls">
    				  <select name="kategori">
    					<option value="1">Websites, IT & Software</option>
    					<option value="2">Mobile Phones & Computing</option>
    					<option value="3">Writing & Content</option>
    					<option value="4">Design, Media & Architecture</option>
    					<option value="5">Data Entry & Admin</option>
    					<option value="6">Engineering & Science</option>
    					<option value="7">Product Sourcing & Manufacturing</option>
    					<option value="8">Sales & Marketing</option>
    					<option value="9">Business, Accounting, Human Resources & Legal</option>
    					<option value="10">Translation & Languages</option>
    					<option value="11">Other</option>
    				  </select>
    				</div>
    			  </div>
                <label for="Deskripsi">Deskripsi</label>
                    <textarea rows="5" cols="50" name="deskripsi"></textarea>
                <div class="control-group">
                    <label class="control-label" for="inputSkill">Skill yang dibutuhkan (Ctrl+(pilihan) untuk multi select)</label>
                    <div class="controls">
                      <select multiple="multiple" name="skill">
                        <option value="1">PHP</option>
                        <option value="2">Java</option>
                        <option value="3">HTML</option>
                        <option value="4">C++</option>
                        <option value="5">C#</option>
                        <option value="6">Javascript</option>
                      </select>
                    </div>
                  </div>
            </fieldset>
            <fieldset>
                <legend>Fitur Project</legend>
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
            </fieldset>
            <fieldset>
                <legend>Budget Project</legend>
                <div class="control-group">
    				<label class="control-label" for="inputBudget">Budget yang tersedia</label>
    				<div class="controls">
    				  <select name="budget">
    					<option value="1">Kurang dari Rp. 5.000.000,00</option>
    					<option value="2">Rp. 5.000.000,00 - Rp. 10.000.000,00</option>
    					<option value="3">Rp. 10.000.000,00 - Rp. 50.000.000,00</option>
    					<option value="4">Rp. 50.000.000,00 - Rp. 100.000.000,00</option>
    					<option value="5">Lebih dari Rp. 100.000.000,00</option>
    					<option value="6">Tidak Yakin</option>
    				  </select>
    				</div>
    			  </div>
                <label for="CreditcardMonth">Masa Berlaku</label>
                <select id="CreditcardMonth">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select id="CreditcardYear">
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>        
                <label for="Mode">Mode</label>
                <select>
    				<option name="tetap">Tetap</option>
    				<option name="komisi">Sesuai Komisi</option>
    			</select>
                <label for="Lokasi">Lokasi Kerja</label>
                <input id="lokasi" type="text" name="lokasi" />
            </fieldset>
            <p>
                <input id="buatProject" type="submit" value="Buat Project" name="buatProjectTrial" />
                <input id="buatProject" type="reset" value="Reset" />
            </p>
        </form>
    </div>
</body>
</html>
