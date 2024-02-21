$(function () {
  $(".tomboljadwal").on("click", function () {
    $("#penjadwalan").html("Tambah Jadwal");
    $(".modal-footer button[type=submit]").html("Tambah Jadwal");
  });

  $(".tampilubahJadwal").on("click", function () {
    $("#penjadwalanLabel").html("Ubah Jadwal");
    $(".modal-footer button[type=submit]").html("ubah Jadwal");
    $(".modal-body form").attr(
      "action",
      "http://localhost/phpmvc/public/PenjadwalanAsisten/ubah"
    );

    const id = $(this).data("id");
    console.log(id);
    $.ajax({
      url: "http://localhost/phpmvc/public/PenjadwalanAsisten/getubah",
      data: { idfrek: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#asisten").val(data.Nama);
        $("#Asisten").val(data.asisten);
        $("#praktikum").val(data.matkul);
        $("#Hari").val(data.hari);
        $("#Jam").val(data.jam);
        $("#lab").val(data.namalab);
        $("#frekuensi").val(data.kelasfrek);
        $("#idfrek").val(data.idfrek);
        // $.ajax({
        //   type: "post",
        //   url: "http://localhost/phpmvc/public/PenjadwalanAsisten/getubahAsisten",
        //   data: { Id_Asisten: data.IdAsisten },
        //   dataType: "json",
        //   success: function (Asisten) {
        //     if (Asisten) {
        //       $("#asisten").append(
        //         '<option value="' +
        //           Asisten.IdAsisten +
        //           '" selected>' +
        //           Asisten.Nama +
        //           "</option>"
        //       );
        //     } else {
        //       $("#asisten").append(
        //         '<option value="#">-- Pilih Asisten --</option>'
        //       );
        //     }
        //   },
        // });
      },
    });
  });

  // document.getElementById("example").DataTable();
});
