


    <div class="containers">
     <div class="container  d-flex justify-content-center align-items-center ">
          <div class="content-beranda mt-5 bg-white "style="width: 50%;">
              <h1 class="modal-title fs-5" id="exampleModalLabel ">Form Edit Jadwal</h1>
              <form  class="mt-5" method="post" action="">
                <?php print_r($data); ?>

                        <?php foreach ($data['mhsk'] as $value): ?>
                            <?php echo $value['Nama']; ?>
                        <?php endforeach; ?>

                        

                        <div class="overflow-auto" style="height: 550px;">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Asisten:</label>
                            <select id="asisten" class="form-control" name="IdAsisten"></select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label ">Jabatan Asisten:</label>
                            <select class ="form-control"id="Asisten" name="Asisten">
                                <option value=""><?php print_r($value); ?></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label ">Praktikum:</label>
                            <select id="praktikum" class="form-control" name="idmatkul"></select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label ">Hari:</label>
                            <select class ="form-control"id="Hari" name="Hari"></select>
                        </div>
                        <div class="mb-3"> 
                            <label for="recipient-name" class="col-form-label ">Jam:</label>
                            <select class ="form-control"id="Jam" name="Jam"></select>
                        </div> 
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label ">Laboratorium:</label>
                            <select id="praktikum" class="form-control" name="idlab"></select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label ">frekuensi:</label>
                            <select id="frekuensi" class="form-control" name="idkelas"></select>
                        </div>
                        <div class="modal-footer  mt-5 m-4">
                        <a class="btn button-simpan-2 bg-primary rounded-4 " style="background-color: red; text-decoration: none; color: white;" href="<?= BASEURL; ?>/Admin/daftarAbsen">Batal</a>
                            <button type="submit" class="btn button-simpan-2 bg-primary rounded-4 ">Simpan</button>
                        </div>
                    
                      
    </div>

