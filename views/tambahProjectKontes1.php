<h3>Tambah Project Kontes</h3>
<form class="form-horizontal" action="tambahProjectFiturKontes" method="post">
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
    <label class="control-label" for="inputEmail">Hadiah yang disediakan</label>
    <div class="controls">
          <div class="input-prepend input-append">
            <span class="add-on">Rp.</span>
            <input class="span2" id="appendedPrependedInput" type="text" name="budget">
            <span class="add-on">.00</span>
          </div>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-info" value="Next" name="nextKontes">
      <input type="submit" class="btn btn-danger" value="Cancel" name="cancel">
    </div>
  </div>
</form>