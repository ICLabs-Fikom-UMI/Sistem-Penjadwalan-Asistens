<link rel="stylesheet" href="<?= BASEURL ?>/css/sidebar.css" />
<style>
  .sidebar-menu{
    display:flex;
    flex-direction: column;
  }
</style>

<body?>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-logo">
          <a href="http://localhost/SIPEMLA/Beranda">
            <!-- <img src="<?= BASEURL ?>/img/logo-sipemla.png" alt="Logo SIPEMLA" /> -->
          </a>
          <h5 class="link-sipemla">
            Admin Laboratorium 
          </h5>
          <ul class="sidebar-menu">
          <li>
            <a href="<?= BASEURL?>/DataAsisten"><i class="fa-regular fa-file" style="color: #ffffff;"></i> Data Asisten</a>
          </li>
          <br>
          <li>
            <a href="<?= BASEURL?>/PenjadwalanAsisten"><i class="fa-regular fa-calendar-days" style="color: #ffffff;"></i> Penjadwalan Asisten</a>
          </li> 
          <br>
          <li>
            <a href="<?= BASEURL?>/viewJadwal"><i class="fa-regular fa-eye" style="color: #ffffff;"></i> Jadwal Asisten</a>
          </li>
        </ul>
        </div>
       
      </nav>

      <!-- Content area -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

