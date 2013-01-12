<h3>Tambah Project Trial</h3>
<form class="form-horizontal" action="tambahProjectFiturTrial" method="post">
  <div class="control-group">
    <label class="control-label" for="inputNamaProject">Nama Project</label>
    <div class="controls">
      <input type="text" id="inputNamaProject" placeholder="Masukkan nama Project" name="namaProject">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputKategori">Kategori</label>
    <div class="controls">
      <select multiple="multiple" name="kategori">
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
    <label class="control-label" for="inputEmail">Budget yang tersedia</label>
    <div class="controls">
      <select multiple="multiple" name="budget">
        <option value="1">Kurang dari Rp. 5.000.000,00</option>
        <option value="2">Rp. 5.000.000,00 - Rp. 10.000.000,00</option>
        <option value="3">Rp. 10.000.000,00 - Rp. 50.000.000,00</option>
        <option value="4">Rp. 50.000.000,00 - Rp. 100.000.000,00</option>
        <option value="5">Lebih dari Rp. 100.000.000,00</option>
        <option value="6">Tidak Yakin</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-info" value="Next" name="nextTrial">
      <input type="submit" class="btn btn-danger" value="Cancel" name="cancel">
    </div>
  </div>
</form>