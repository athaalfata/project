<h3>Tambah Project Regular</h3>
<form class="form-horizontal" action="cekSubmit" method="post">
  <div class="control-group">
    <label class="control-label" for="inputNamaProject">Nama Project</label>
    <div class="controls">
      <input type="text" id="inputNamaProject" placeholder="Masukkan nama Project" name="namaProject">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputKategori">Kategori</label>
    <div class="controls">
      <select multiple="multiple">
        <option name="1">Websites, IT & Software</option>
        <option name="2">Mobile Phones & Computing</option>
        <option name="3">Writing & Content</option>
        <option name="4">Design, Media & Architecture</option>
        <option name="5">Data Entry & Admin</option>
        <option name="6">Engineering & Science</option>
        <option name="7">Product Sourcing & Manufacturing</option>
        <option name="8">Sales & Marketing</option>
        <option name="9">Business, Accounting, Human Resources & Legal</option>
        <option name="10">Translation & Languages</option>
        <option name="11">Other</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputDeskripsi">Deskripsi</label>
    <div class="controls">
      <textarea rows="3" name="deskripsi"></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputSkill">Skill yang dibutuhkan</label>
    <div class="controls">
      <input type="text" id="inputSkill" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputBudget">Budget yang tersedia</label>
    <div class="controls">
      <select multiple="multiple">
        <option name="1">Kurang dari Rp. 5.000.000,00</option>
        <option name="2">Rp. 5.000.000,00 - Rp. 10.000.000,00</option>
        <option name="3">Rp. 10.000.000,00 - Rp. 50.000.000,00</option>
        <option name="4">Rp. 50.000.000,00 - Rp. 100.000.000,00</option>
        <option name="5">Lebih dari Rp. 100.000.000,00</option>
        <option name="6">Tidak Yakin</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-info" name="nextRegular" value="Next">
      <input type="submit" class="btn btn-danger" name="cancel" value="Cancel">
    </div>
  </div>
</form>