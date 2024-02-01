<style>
    .container-btn {
        text-align: right;
        /* Tombol login berada di ujung kanan */
        margin-bottom: 10px;
        /* Memberikan margin di bawah container-btn */
    }

    .container-btn .btn-logout {
        background-color: #51a8b1;
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