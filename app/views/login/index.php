<div class="container">
      <div class="login-main">
        <div class="login-head">
          <img
            src="http://localhost/phpmvc/public/img/logolab-removebg-preview.png"
            alt=""
            height="80px"
            width="80px"
          />
          <p>Sistem Penjadwalan Mengajar Asisten</p>
        </div>
        <br />
        <div class="login-body">
          <div class="head-logo">
            <img
              src="http://localhost/phpmvc\public\img\Gambar_WhatsApp_2024-01-21_pukul_12.38.47_10a00e32-removebg-preview.png"
              alt=""
              height="80px"
              width="60px"
            />
            <h2>Login</h2>
          </div>
          <br />
          <br />
          <form action="<?= BASEURL; ?>/Login/login" method="post">
            <input
              type="text"
              name="username"
              class="username"
              placeholder="Masukkan Username"
            /><br /><br />
            <input
              type="password"
              name="password"
              class="password"
              placeholder="Masukkan Password"
            /><br /><br />
            <button type="submit" class="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>