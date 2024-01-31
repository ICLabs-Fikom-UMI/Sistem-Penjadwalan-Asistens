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
      <li><a href="">jadwal asisten</a></li>
      <li><a href="<?= BASEURL?>/login/logout">logout</a></li>
    </ul>
  </nav>
</header>
<!-- <header>
        <nav>
        <h1>ICLABS</h1>
        <a href="#">Home</a>
        <a href="#">Form Jadwal Kosong</a>
        <a href="#">Jadwal Asisten</a>
        <a href="#">Profil</a>
        <a href="#">LogOut</a>
     
      

 </nav>
    </header> -->
<main>
  <form action="action.php" method="post">
    <table>
      <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" Nama="Nama"</td>
      </tr>
      <tr>
        <td>Mata Kuliah</td>
        <td>
          <select namme="Mata Kuliah">
            <option value="Pemograman Web">Pemograman Web</option>
            <option value="Pemograman Web">Pemograman Beriontasi Objek</option>
            <option value="Pemograman Web">Algoritma Pemograman 1</option>
            <option value="Pemograman Web">Algoritma Pemograman 2</option>
            <option value="Pemograman Web">Basis Data 1</option>
            <option value="Pemograman Web">Basis Data 2</option>
            <option value="Pemograman Web">
              Pengantar Teknologi Informasi
            </option>
            <option value="Pemograman Web">Jaringan Komputer</option>
            <option value="Pemograman Web">Micro Controller</option>
            <option value="Pemograman Web">Pemograman Mobile</option>
            <option value="Pemograman Web">Elektronika Dasar</option>
            <option value="Pemograman Web">Akuntansi</option>
            <option value="Pemograman Web">Multimedia</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email"</td>
      </tr>
      <tr>
        <td>Jadwal Kosong</td>
        <td><input type="file" name="Jadwal Kosong"</td>
        <br />
      </tr>

      <tr>
        <td colspan="2" align="center" class="button">
          <input type="submit" value="Save" id="submit" />
          <input type="reset" value="Reset" id="reset" />
        </td>
      </tr>
    </table>
  </form>
</main>
