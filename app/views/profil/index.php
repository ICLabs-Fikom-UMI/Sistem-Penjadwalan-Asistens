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
<main>
    
      <form action="<?= BASEURL?>/profil/tambahProfile" method="post">
        <h2>Lengkapi Profile</h2>
        <!-- <input type="text" name="nim" placeholder="Masukkan NIM" /> -->
        <input type="text" name="Nama" placeholder="Masukkan Nama" />
        <input
          type="text"
          name="ProgramStudi"
          placeholder="Masukkan Program Studi"
        />
        <!-- <input
          type="text"
          name="nomor_handphone"
          placeholder="Masukkan Nomor Handphone"
        /> -->
        <input type="email" name="email" placeholder="Masukkan Email" />
        <!-- <input type="file" name="foto" placeholder="Upload Foto" /> -->
        <button type="submit">CONFIRM</button>
        <button type="reset">RESET</button>
        
      </form>
    </main>