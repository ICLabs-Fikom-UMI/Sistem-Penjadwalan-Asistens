<header>
    <nav>
        <div class="logo">
            <img src="<?=BASEURL?>/img/logolab-removebg-preview.png" alt="Logo-Apk"/>
            <h1>ICLabs</h1>
        </div>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="<?= BASEURL?>/home">Form Jadwal Kosong</a>
            </li>
            <li>
                <a href="<?= BASEURL?>/profil">Profil</a>
            </li>
            <li>
                <a href="<?= BASEURL?>/jadwalAsisten">Jadwal asisten</a>
            </li>
            <li>
                <a href="<?= BASEURL?>/login/logout">logout</a>
            </li>
        </ul>
    </nav>
</header>
<main>

    <form action="<?= BASEURL?>/profil/tambahProfile" method="post">
        <h2>Lengkapi Profile</h2>
        <br>
        <table>
            <tr>
              <td>Nim</td>
              <td> <input type="text" name="NIM" value="<?= $_SESSION['username']?>" placeholder="NIM"/ readonly></td>
            </tr>
        
            <tr>
                <td>
                    Nama Lengkap</td>
                <td>
                    <input type="text" name="Nama" placeholder="Masukkan Nama"/>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>
                    <input type="text" name="ProgramStudi" placeholder="Masukkan Program Studi"/></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="email" name="email" placeholder="Masukkan Email"/> </td>
            </tr>

            <!-- <input type="text" name="nomor_handphone" placeholder="Masukkan Nomor
            Handphone" /> -->
            
            <!-- <input type="file" name="foto" placeholder="Upload Foto" /> -->
          <tr>
            <td> <button type="submit">CONFIRM</button>
            <button type="reset">RESET</button></td>
          </tr>
            

        </form>
    </table>
</main>