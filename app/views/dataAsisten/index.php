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
<div class="container-btn mt-3">
  <a
    class="btn-logout btn-sm"
    href="<?= BASEURL?>/login/logout"
    role="button"
    onclick="return confirm('Anda Yakin Ingin Keluar')"
    >Logout</a
  >
</div>
<h1>Tampilan Data Asisten</h1>
<br /><br />
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Program Studi</th>
                <!-- <th>Bidang Keahlian</th>  -->
      </tr>
        </thead>
        <tbody>
          <?php
          $No=0;
          foreach($data['asisten']as $asisten):
            $No++;
            ?>
            <tr>
                <td><?=$No;?></td>
                <td><?=$asisten['username'];?></td>
                <td><?=$asisten['Nama'];?></td>
                <td><?=$asisten['email'];?></td>
                <td><?=$asisten['ProgramStudi'];?></td>
                <!-- <td>$320,800</td> -->
            </tr>
           <?php
           endforeach
           ?>
           
                <!-- <td>$86,000</td>  -->
           
        </tfoot>
    </table>