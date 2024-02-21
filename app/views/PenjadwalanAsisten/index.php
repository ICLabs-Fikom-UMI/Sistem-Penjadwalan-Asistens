<style>
  .container-btn {
    text-align: right;
    /* Tombol login berada di ujung kanan */
    margin-bottom: 10px;
    /* Memberikan margin di bawah container-btn */
  }

  .container-btn .btn-logout {
    background-color: #ccc;
    font-family: "Poppins", sans-serif;
    color: white;
    border-radius: 10px;
    text-decoration: none;
    border: none;
    padding: 8px;
  }
</style>
<div class="container-btn mt-3 ">
  <a class="btn-logout btn-sm" href="<?= BASEURL ?>/login/logout" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
</div>
<!-- Button trigger modal -->

<div class="container-fluid mt-5">
  <div class="text-start">
    <button type="button" class="btn btn-primary   w-25 tombolJadwal" data-bs-toggle="modal" data-bs-target="#penjadwalan"><i class="fa-solid fa-plus"
                    style="color: #ffffff;"></i>Tambah Jadwal</button>
  </div>
</div>
<br><br>

<table class="table table-striped" style="width:100%">
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
                <th >action</th>

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
                <td><a href="<?= BASEURL ?>/PenjadwalanAsisten/hapusJadwal/<?=$frekuensi['idfrek']?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash" style="color: #dd030e;"></i></a></td>
                <td><a class="tampilubahJadwal" href="<?= BASEURL ?>/PenjadwalanAsisten/ubahJadwal/<?=$frekuensi['idfrek']?>"data-bs-toggle="modal" data-bs-target="#penjadwalan" data-id="<?=$frekuensi['idfrek']; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                <!-- <td> 
                  <a href="<?= BASEURL ?>/PenjadwalanAsisten/ubahJadwal/<?=$frekuensi['idfrek']?>" value="edit">Edit</a>
                </td>  -->
                <!-- <<td>$320,800</td> --> 
            </tr>
           <?php
           endforeach
           ?>
           
                <!-- <td>$86,000</td>  -->
           
        </tfoot>
    </table>
<!-- Button trigger modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="penjadwalan" tabindex="-1" aria-labelledby="penjadwalan" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="penjadwalanLabel">Penjadwalan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="d-flex w-100">
            <form action="<?= BASEURL; ?>/PenjadwalanAsisten/tambahJadwal" method="post">
            <input type="hidden" name="idfrek" id="idfrek">
              <div class="col mb-3">
                <label for="NamaAsisten" class="form-label">Nama Asisten</label>
                <select id="asisten" class="form-control" name="IdAsisten">
                
                  <option value="#">--Pilih Asisten--</option>
                 <?php foreach ($data['dataAsisten'] as $asisten) : ?>
                    <option value="<?= $asisten['IdAsisten']; ?>"><?= $asisten['Nama']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="Asisten">Jabatan Asisten</label>
                <select class ="form-control"id="Asisten" name="Asisten">
                  <option value="Asisten 1">Asisten 1</option>
                  <option value="Asisten 2">Asisten 2</option>
                </select>
              </div>
              <div>
              <label for="Praktikum" class="form-label">Praktikum</label>
                <select id="praktikum" class="form-control" name="idmatkul">
                <option value="#">--Pilih Matkul Praktikum--</option>
                <?php foreach ($data['namaMatkul'] as $matkul) : ?>
                  <option value="<?= $matkul['idmatkul']; ?>"><?= $matkul['matkul']; ?></option>
                  <?php endforeach; ?>
                  </select>
                  </div>
              <div class="form-group">
                <label for="Hari">Hari</label>
                <select class ="form-control"id="Hari" name="Hari">
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Kamis</option>
                  <option value="Rabu">Jumat</option>
                  <option value="Rabu">Sabtu</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Jam">Jam</label>
                <select class ="form-control"id="Jam" name="Jam">
                  <option value="08:00-10:00">08:00-10:00</option>
                  <option value="10:00-12:00">10:00-12:00</option>
                  <option value="13:00-12:00">13:00-15:00</option>
                  <option value="16:00-12:00">16:00-18:00</option>
                </select>
              </div>
              <div>
              <label for="Laboratorium" class="form-label">Laboratorium</label>
                <select id="lab" class="form-control" name="idlab">
                <option value="#">--Pilih Laboratorium--</option>
                <?php foreach ($data['namalab'] as $laboratorium) : ?>
                  <option value="<?= $laboratorium['idlab']; ?>"><?= $laboratorium['namalab']; ?></option>
                  <?php endforeach; ?>
                  </select>
                  </div>
                  <div>
              <label for="frekuensi" class="form-label">frekuensi</label>
                <select id="frekuensi" class="form-control" name="idkelas">
                <option value="#">--Pilih Frekuensi--</option>
                <?php foreach ($data['kelasfrek'] as $kelas) : ?>
                  <option value="<?= $kelas['idkelas']; ?>"><?= $kelas['kelasfrek']; ?></option>
                  <?php endforeach; ?>
                  </select>
                  </div>  
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>