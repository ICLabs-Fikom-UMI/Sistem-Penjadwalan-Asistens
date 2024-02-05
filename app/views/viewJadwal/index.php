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
    <a class="btn-logout btn-sm" href="<?= BASEURL?>/login/logout" role="button" onclick="return confirm('Anda Yakin Ingin Keluar')">Logout</a>
</div>
<h1>Tampilan Jadwal Kosong Asisten</h1>
<br><br>
<table id="example" class="table table-striped" style="width:100%">
<div class="rayhananjing">

    <thead class="asu">
        <tr>
            <th>No</th>
            <th>Id Jadwal</th>
            <th>Nama</th>
            <th>Hari</th>
            <th>Jam</th>
            </tr>
    </thead>
</div>
        <tbody>
          <?php
          $No=0;
          foreach($data['form']as $form):
            $No++;
            ?>
            <tr>
                <td><?=$No;?></td>
                <td><?=$form['idjadwal'];?></td>
                <td><?=$form['Nama'];?></td>
                <td><?=$form['hari'];?></td>
                <td><?=$form['jam'];?></td>
                <!-- <td>$320,800</td> -->
            </tr>
           <?php
           endforeach
           ?>
           
        </table> 