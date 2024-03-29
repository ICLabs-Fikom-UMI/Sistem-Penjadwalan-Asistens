<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>ICLABS</title>
    <link rel="stylesheet" href="profilAsisten.css" />
  </head>
  <body>
    <header>
      <h1>ICLABS</h1>
      <nav>
        <a href="#">Home</a>
        <a href="#">Form Jadwal Kosong</a>
        <a href="#">Jadwal Asistan</a>
        <a href="#">Profil</a>
        <a href="<?= BASEURL?>/login/logout">LogOut</a>
      </nav>
    </header>
    <main>
      <form action="action.php" method="post">
        <h2>Lengkapi Profile</h2>
        <input type="text" name="nim" placeholder="Masukkan NIM" />
        <input type="text" name="nama" placeholder="Masukkan Nama" />
        <input
          type="text"
          name="program_studi"
          placeholder="Masukkan Program Studi"
        />
        <input
          type="text"
          name="nomor_handphone"
          placeholder="Masukkan Nomor Handphone"
        />
        <input type="email" name="email" placeholder="Masukkan Email" />
        <input type="file" name="foto" placeholder="Upload Foto" />
        <button type="submit">CONFIRM</button>
        <button type="reset">RESET</button>
      </form>
    </main>
    <footer>
      <p>Copyright &copy; 2023 ICLABS</p>
    </footer>
  </body>
</html>
