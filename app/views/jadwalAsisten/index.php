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
    <h2>Tampilan Jadwal Asisten</h2>
    <br><br>
  <!-- <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Asisten</th>
                <th>Jabatan</th>
                <th>Praktikum</th>
                <th>Laboratorium</th>
                <th>Frekuensi</th>
                <th>Hari</th>
                <th>Jam</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $No=0;
          foreach($data['frekuensi']as $frekuensi):
            $No++;
            ?>
            <tr>
                <td><?=$No;?></td>
                <td><?=$frekuensi['Nama'];?></td>
                <td><?=$frekuensi['asisten'];?></td>
                <td><?=$frekuensi['matkul'];?></td>
                <td><?=$frekuensi['namalab'];?></td>
                <td><?=$frekuensi['kelasfrek'];?></td>
                <td><?=$frekuensi['hari'];?></td>
                <td><?=$frekuensi['jam'];?></td>
                </tr>
           <?php
           endforeach
           ?>
          </tfoot>
   
</table>  -->
    <!-- <table>
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
      </table> -->
  </form>

  <div class="container">
    <div class="row">
      <div class="col">
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Asisten</th>
                <th>Jabatan</th>
                <th>Praktikum</th>
                <th>Laboratorium</th>
                <th>Frekuensi</th>
                <th>Hari</th>
                <th>Jam</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $No=0;
          foreach($data['frekuensi']as $frekuensi):
            $No++;
            ?>
            <tr>
                <td><?=$No;?></td>
                <td><?=$frekuensi['Nama'];?></td>
                <td><?=$frekuensi['asisten'];?></td>
                <td><?=$frekuensi['matkul'];?></td>
                <td><?=$frekuensi['namalab'];?></td>
                <td><?=$frekuensi['kelasfrek'];?></td>
                <td><?=$frekuensi['hari'];?></td>
                <td><?=$frekuensi['jam'];?></td>
                </tr>
           <?php
           endforeach
           ?>
          </tfoot>
   
</table> 
      </div>
    </div>
  </div>
</main>