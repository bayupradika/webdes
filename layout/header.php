<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website Desa Salo Timur</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <style>
    header{
      width: 100vw;
      margin: 0;
    }
    .navbar {
      width: 100vw;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #1e3a5d; /* Dark Blue color */
      }
      .navbar ul {
        display: flex;
        list-style: none;
      }
      
      .navbar ul li {
        margin-right: 10px;
      }
      
      .navbar ul li a {
        text-decoration: none;
        color: #fff; /* White color */
        padding: 10px;
      }
      
      /* Styles for the logo */
      .logo {
        display: flex;
        padding-left: 20px;
      }
      
      .logo img {
        height: 50px; /* Adjust the height as needed */
      }
      .hamburger{
        display: none;
      }
      
      /* Styles for the dropdown menu */
      .dropdown {
        position: relative;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #1e3a5d; /* Dark Blue color */
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      .dropdown-content a {
        color: #fff; /* White color */
        padding: 10px;
        text-decoration: none;
        display: block;
      }
      
      /* Responsive styles */
      @media screen and (min-width: 769px) {
      .toggle-menu {
        display: none;
      }

      /* Adjust the styles of the desktop menu */
      .navbar ul {
        display: flex;
      }
    }
      @media screen and (max-width: 768px) {
        .navbar ul{
          display: none;
          background-color: #1e3a5d; /* Dark Blue color */
          position: absolute;
          top: 100%;
          left: 0;
          width: 100%;
          margin-top: 0;
        }
        .logo img {
          height: 40px;
        }
        .hamburger{
          display: block;
          padding: 5px 10px;
          margin-right: 20px;
          color: #fff;
          font-size: small;
        }
        .navbar.show ul {
          display: flex;
        }
        
        .navbar ul li {
          margin-right: 0;
          margin-bottom: 10px;
        }
        
        .dropdown-content {
          min-width: 160px;
        }
        .navbar ul li a {
        color: #fff;
        padding: 10px;
        text-align: center;
      }
      }
      
      @media screen and (max-width: 480px) {
        .logo img {
          height: 30px; 
        }
      }
    </style>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header>
    <nav class="navbar">
        <div class="logo">
          <img src="assets/images/bgg.png" alt="Logo">
        </div>
        <ul class="navbar-nav">
          <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-info-circle"></i> Kelembagaan</a>
            <div class="dropdown-content">
              <a href="bpd.php">BPD</a>
              <a href="lpm.php">LPM</a>
              <a href="pkk.php">PKK</a>
              <a href="posyandu.php">Posyandu</a>
              <a href="tani.php">Kelompok Tani</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-cogs"></i> Penduduk</a>
            <div class="dropdown-content">
              <a href="penduduk.php">Data Penduduk</a>
              <a href="grafik.php">Grafik Penduduk</a>
              <a href="pps.php">Data PPS</a>
              <a href="tps.php">Data TPS</a>
              <a href="dpt.php">Data DPT</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-images"></i> Galeri</a>
            <div class="dropdown-content">
              <a href="galeri.php">foto</a>
              <a href="video.php">Video</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-envelope"></i> Profil</a>
            <div class="dropdown-content">
              <a href="profil.php">Profil Desa</a>
              <a href="perangkat.php">Perangkat Desa</a>
              <a href="visimisi.php">Visi & Misi</a>
            </div>
          </li>
          <li><a href="#"><i class="fas fa-cogs"></i>Kontak</a></li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-images"></i>Lainnya</a>
            <div class="dropdown-content">
              <a href="#">File Download</a>
              <a href="#">Agenda</a>
              <a href="#">Konsultasi</a>
            </div>
          </li>
        </ul>
        <div class="hamburger">
        <i class="fas fa-bars"></i>
      </div>
      </nav>
    </header>