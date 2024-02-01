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
<main style="width: 100%;">
  <form action="action.php" method="post">
    <table>
    <tr>
        <td>Prodi</td>
        <td>
          <select name="Teknik Informatika">
            <option value="Teknik Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Semester</td>
        <td>
            <select name="Ganjil" >
                <option value="Ganjil">Ganjil</option>
                <option value="Ganjil">Genap</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>
            <select name="Semua">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
                <option value="A4">A4</option>
                <option value="A5">A5</option>
                <option value="A6">A6</option>
                <option value="A7">A7</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="B3">B3</option>
            </select>
        </td>
      </tr>
      <tr>
      <td colspan="2" align="center" class="button">
          <input type="submit" value="Submit" id="submit" />
      </tr>
      </table>
  </form>
</main>