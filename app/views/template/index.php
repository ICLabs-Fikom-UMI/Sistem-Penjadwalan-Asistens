<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/login.css" />
  </head>

  <body>
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
              src="http://localhost/phpmvc/public/img/Gambar WhatsApp 2024-01-21 pukul 12.38.47_10a00e32.jpg"
              alt=""
              height="80px"
              width="60px"
            />
            <h2>Login</h2>
          </div>
          <br />
          <br />
          <form action="<?= BASEURL ?> Login/login" method="post">
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
  </body>
</html>
