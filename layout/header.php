<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <title>Document</title>
  <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}
html{
  overflow-x: hidden;
}
/* navbar */
.navbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 7%;
    background-color: #1e3a5d; 
    top: 0;
    left: 0;
    right: 0;
}

.navbar .navbar-logo img{
  width: 100%;
}

.navbar .navbar-nav a{
    color: #fff;
    display: inline-block;
    font-size: 0.9rem;
    margin: 0 0.5rem;
}

.navbar .navbar-nav a:hover{
    color: green;
}

.navbar .navbar-nav a::after{
    content: '';
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid green;
    transform: scaleX(0);
    transition: 0.2s linear;
}

.navbar .navbar-nav a:hover::after{
    transform: scaleX(0.5);
}

.navbar .navbar-extra a{
    color: #fff;
    margin: 0 0.5rem; 
}
.navbar .navbar-extra a:hover{
    color: green;
}

#hamburger-menu{
    display: none;
}
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
/* Footer */
.footer{
  display: flex;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #092140;
  flex-direction: column;
}
.footer h1{
  margin: 0;
  color: white;
}
.rowflex{
  padding: 10px 0;
  width: 100%;
}
.peta{
  float: left;
  box-sizing: border-box;
  border-right: 2px solid #024959;
  text-align: center;
  height: 210px;
  width: 50%;
}
.peta iframe{
  margin-top: 10px;
}
.kutipan{
  padding: 0 20px;
  color: white;
  float: left;
  box-sizing: border-box;
  border-left: 2px solid #024959;
  text-align: left;
  height: 208px;
  width: 50%;
  text-align: center;
}

.kutipan p{
  font-size: 1;
  margin: 0;
}
.copyright-section{
  text-align: center;
  color: white;
  background-color: #024959;
  height: 50px;
  flex: 1;
}
      /* Custom styles */
/* Adjust the width of the container on small screens */
.container {
  max-width: 100%;
}

.jumbotron::after{
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 25%;
    bottom: 0;
    background: linear-gradient(0deg, rgba(1,1,3,1) 8%, rgba(255,255,255,0)50%);
}

/* Stack the columns vertically on small screens */
.judul_section .row {
  flex-direction: column;
}

/* Remove padding on small screens */
.judul_section .col-sm-9 {
  padding: 0;
}

/* Add padding to the paragraph on small screens */
.judul_section p {
  padding: 10px;
}

/* Add a bit of space between the columns on small screens */
.judul_section .col-sm-9, .judul_section .col-3 {
  margin-bottom: 10px;
}

/* Mobile */
@media (max-width: 450px) {
    html{
        font-size: 55%;
    }
    body{
      overflow-x: hidden;
    }
    #hamburger-menu{
        display: inline-block;
    }
    .navbar .navbar-nav{
        position: absolute;
        top: 100%;
        right: -100%;
        width: 20rem;
        height: 100vh;
        transition: 0.3s;
    }
    .navbar .navbar-nav.active{
        z-index: 9999;
        right: 0;
        background-color: #1e3a5d;
    }
    .navbar .navbar-nav a{
        color: white;
        display: block;
        margin: 10px;
        padding: 10px;
        font-size: 1rem;
        font-weight: bold;
    }
    .navbar .navbar-nav a::after{
        transform-origin: 0 0;
    }
    .navbar .navbar-nav a:hover::after{
        transform:scaleX(0.2s);
    }
    .footer {
        text-align: center;
      }

      .rowflex {
        flex-direction: column;
      }

      .footer h1 {
        font-size: 18px;
      }

      .footer p {
        font-size: 12px;
      }

      .peta {
        float: none;
        border-right: none;
        width: 100%;
        height: auto;
      }

      .kutipan {
        float: none;
        border-left: none;
        width: 100%;
        height: auto;
      }
}
/* Desktop */
@media (max-width: 100vw) and (min-width: 769px) {
    html{
        font-size: 75%;
    }
    body{
      overflow-x: hidden;
    }
    #hamburger-menu{
        display: inline-block;
    }
    .navbar .navbar-nav{
        position: absolute;
        top: 100%;
        right: -100%;
        background-color: #fff;
        width: 20rem;
        height: 100vh;
        transition: 0.3s;
        font-weight: bold;
    }
    .navbar .navbar-nav.active{
        z-index: 9999;
        right: 0;
        background-color: #1e3a5d;
    }
    .navbar .navbar-nav a{
        color: white;
        display: block;
        margin: 10px;
        padding: 10px;
        font-size: 1rem;
    }
    .navbar .navbar-nav a::after{
        transform-origin: 0 0;
    }
    .navbar .navbar-nav a:hover::after{
        transform:scaleX(0.2s);
    }
    .judul_section .row {
    flex-direction: row;
  }
}
/* Tablet */
@media (max-width: 768px) and (min-width: 451px) {
    html{
        font-size: 62.5%;
    }
    body{
      overflow-x: hidden;
    }
    #hamburger-menu{
        display: inline-block;
    }
    .navbar .navbar-nav{
        position: absolute;
        top: 100%;
        right: -100%;
        background-color: #fff;
        width: 20rem;
        height: 100vh;
        transition: 0.3s;
    }
    .navbar .navbar-nav.active{
        z-index: 9999;
        right: 0;
        background-color: #1e3a5d;
    }
    .navbar .navbar-nav a{
        color: white;
        display: block;
        margin: 10px;
        padding: 10px;
        font-size: 1rem;
        font-weight: bold;
    }
    .navbar .navbar-nav a::after{
        transform-origin: 0 0;
    }
    .navbar .navbar-nav a:hover::after{
        transform:scaleX(0.2s);
    }
    .footer {
        text-align: center;
      }

      .rowflex {
        flex-direction: column;
      }

      .footer h1 {
        font-size: 18px;
      }

      .footer p {
        font-size: 12px;
      }

      .peta {
        float: none;
        border-right: none;
        width: 100%;
        height: auto;
      }

      .kutipan {
        float: none;
        border-left: none;
        width: 100%;
        height: auto;
      }
  }
 </style>
</head>
<body>
      <!-- Navbar -->
      <nav class="navbar">
        <div class="navbar-logo">
          <img src="./bgg.png" alt="logo">
        </div>
        <ul class="navbar-nav">
            <li><a href="index.php">BERANDA</a></li>
            <li class="dropdown"><a href="#about">KELEMBAGAAN</a>
                <div class="dropdown-content">
                  <a href="bpd.php">BPD</a>
                  <a href="lpm.php">LPM</a>
                  <a href="pkk.php">PKK</a>
                  <a href="posyandu.php">Posyandu</a>
                  <a href="tani.php">Kelompok Tani</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">PENDUDUK</a>
                <div class="dropdown-content">
                  <a href="penduduk.php">Data Penduduk</a>
                  <a href="grafik.php">Grafik Penduduk</a>
                  <a href="pps.php">Data PPS</a>
                  <a href="tps.php">Data TPS</a>
                  <a href="dpt.php">Data DPT</a>
                </div>
              </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">POTENSI</a>
                <div class="dropdown-content">
                  <a href="penduduk.php">Data Penduduk</a>
                  <a href="grafik.php">Grafik Penduduk</a>
                  <a href="pps.php">Data PPS</a>
                  <a href="tps.php">Data TPS</a>
                  <a href="dpt.php">Data DPT</a>
                </div>
              </li>
              <li class="dropdown">
                <a href="#" class="dropbtn">GALERI</a>
                <div class="dropdown-content">
                  <a href="galeri.php">Foto</a>
                  <a href="video.php">Video</a>
                </div>
              </li>
              <li class="dropdown">
                <a href="#" class="dropbtn">PROFIL</a>
                <div class="dropdown-content">
                  <a href="profil.php">Profil Desa</a>
                  <a href="perangkat.php">Perangkat Desa</a>
                  <a href="visimisi.php">Visi & Misi</a>
                </div>
              </li>
              <li><a href="#foo t">KONTAK</a></li>
        </ul>
        <div class="navbar-extra">
            <a href="#" id="searchList"><i data-feather="search"></i></a>
            <a href="#hamburger-menu" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>