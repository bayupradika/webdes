<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="../assets/css/style.css">
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
    scroll-behavior: smooth;
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
  width: 100px;
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
/* Desktop */
@media (max-width: 100vw) and (min-width: 769px) {
    html{
        font-size: 75%;
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

}
/* Tablet */
@media (max-width: 768px) and (min-width: 451px) {
    html{
        font-size: 62.5%;
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
  }
  /* Mobile */
@media (max-width: 450px) {
    html{
        font-size: 55%;
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
}
  </style>
</head>
<body>
      <!-- Navbar -->
      <nav class="navbar">
        <div>
          <a class="navbar-logo"><img src="bgg.png" alt="">
            </a>
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
              <li><a href="#">KONTAK</a></li>
        </ul>
        <div class="navbar-extra">
            <input type="text" id="searchInput" placeholder="Cari...">
            <a href="#" id="searchList"><i data-feather="search"></i></a>
            <ul id="searchList" style="display: none;">
              <li>Apple</li>
              <li>Orange</li>
              <li>Banana</li>
              <li>Grapes</li>
              <li>Watermelon</li>
              <li>Pineapple</li>
            </ul>
            <a href="#hamburger-menu" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>