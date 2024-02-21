<header>
  <nav>
    <div class="logo">
      <img
        src="<?=BASEURL?>/img/logolab-removebg-preview.png"
        alt="Logo-Apk"
      />
      <h1>ICLabs</h1>
    </div>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="<?= BASEURL?>/home">Form Jadwal Kosong</a></li>
      <li><a href="<?= BASEURL?>/profil">profil</a></li>
      <li><a href="<?= BASEURL?>/jadwalAsisten">jadwal asisten</a></li>
      <li><a href="<?= BASEURL?>/login/logout">logout</a></li>
    </ul>
  </nav>
</header>

<div class="asisten-Home-jadwalKosong-img">
</div>
 
<main>
  <div class="asisten-Home-jadwalKosong-card">
    <div class="asisten-Home-jadwalKosong-cardBody">
    <form action="<?= BASEURL; ?>/Home/insertDataForm" method="post" class="form-container">
  <table>
    <!-- <tr>
      <td>Nama Lengkap</td>
      <td><input type="text" Nama="Nama"</td>
    </tr> -->
    <tr>
      <td><input type="hidden" value="<?= $_SESSION['id']?>"></td>
    </tr>
    <tr>
      <td>Hari</td>
      <td>
        <select name="Hari">
          <option value="Senin">Senin</option>
          <option value="Selasa">Selasa</option>
          <option value="Rabu">Rabu</option>
          <option value="Kamis">Kamis</option>
          <option value="Jum'at">Jum'at</option>
          <option value="Sabtu">Sabtu</option>
          
            
    </tr>
    <tr class="asisten-tr">
      <td>Jam</td>
      <td>
        <input type="checkbox" name="Jam[]" value="08:00-10:00">08:00-10:00
        <input type="checkbox" name="Jam[]" value="10:00-12:00">10:00-12:00
        <input type="checkbox" name="Jam[]" value="13:00-15:00">13:00-15:00
        <input type="checkbox" name="Jam[]" value="16:00-18:00">16:00-18:00  
    </td>
  
    </tr>
    <!-- <tr>
      <td>Jadwal Kosong</td>
      <td><input type="file" name="Jadwal Kosong"</td>
      <br />
    </tr> -->
  
    <tr>
      <td colspan="2" align="center" class="button">
        <input type="submit" value="Save" id="submit" />
        <input type="reset" value="Reset" id="reset" />
      </td>
    </tr>
  </table>
  </form>
    </div>
  </div>

</main>
