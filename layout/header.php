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
body{
  font-family: 'OpenSans',arial;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}
a{
  text-decoration: none;
}
h1, h2, h3, h4, h5, h6 {
  font-family: 'Rajdhani',sans-serif;
}
p{
  font-family: 'OpenSans',arial;
}
.container{
  align-self: flex-end;
  margin:0 auto;
  width: 100vw;
  padding-bottom: 30px;
}
html{
  overflow-x: hidden;
}
.row{
  display: flex;
  box-sizing: border-box;
  height: 90px;
}
.nav-menu {
  flex: 4;
  height: 100%;
}
.nav-menu ul {
  display: flex;
  justify-content: flex-start;
  flex-wrap: nowrap;
  margin: 0;
  padding: 0;
}
.nav-menu ul li {
  text-align: center;
  width: 90px;
  display: block;
  background: inherit;
  margin: auto 0;
  line-height: 90px;
  font-family: 'Rajdhani',sans-serif;
}
.nav-menu ul li a {
  height: 90px;
  background: #024959;
  display: inline-block;
  color: #ffe;
  padding: 0 5px;
  width: 100%;
  box-sizing: border-box;
}
.nav-menu ul li a:hover {
  background: #092140;
  border-bottom: 5px solid #92cf48;
}
.nav-menu ul li a:active {
  background: #92cf48;
}
.nav-sisa{
  flex: 1;
  position: relative;
  /* width: 16.6666666667%; */
}
.nav-sisa .kontak {
  line-height: 90px;
  height: 90px;
  box-sizing: border-box;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}
.nav-sisa .kontak a{
  border-radius: 5px;
  font-family: 'Rajdhani',sans-serif;
  box-sizing: border-box;
  padding: 0 10px;
  background-color: #92cf48;
  line-height: 30px;
  font-weight: 550;
  color: white;
  display: inline-block;
  transition: 0.5s all;
  border: 2px solid #92cf48;
  -webkit-transition: 0.5s all;
  transition: 0.5s all;
  -moz-transition: 0.5s all;
}
.nav-sisa .kontak a:hover{
  background: none;
  color: #92cf48;
}

.clear{
  clear: both;
}

.judul_section {
  width: 100%;
  text-align: center;
  margin: 15px 0;
}

.judul_section h1 {
  color: #024959;
  font-weight: bold;
  font-family: 'Rajdhani',sans-serif;
  margin: 0;
}

.judul_section hr {
  width: 250px;
  border-top: 3px solid #024959;
  margin: 0 auto;
}

.berita .berita_section {
  width: 100%;
    display: inline-flex;
    flex-flow: row wrap;
    justify-content: center;
}

.grid{
  display: flex;
  position: relative;
  /* background-color: lightskyblue; */
  width: 100%;
  box-sizing: border-box;
  /* margin-bottom: 10px; */
  margin: 0 3px 6px;
}
.cover_grid_news{
  width: 270px;
  height: auto;
}
.cover_grid_news img{
  height: auto;
  width: 250px;
}
.read-more{
  display: inline-block;
}
.judul{
  height: 25px;
  margin: 0;
}
.judul h3{
  font-size: 1.3rem;
  margin: 0;
  font-weight: bold;
  text-align: justify;
}
.judul h3 a{
  text-transform: uppercase;
  color: #000;
}
.judul h3 a:hover{
  color: #92cf48;
}

.isi p {
  text-align: justify;

}
.read-more{
  width: 100%;
  margin: 5px;
}
.attr{
  margin: 0;
  font-family: 'OpenSans',arial;
  font-size: 12px;
}
.attr p{
  color: rgba(0,0,0,.5);
  margin: 0;
  font-weight: bold;
}
.attr p a{
  color: rgba(0,0,0,.5);
}
.attr p a:hover{
  color: rgba(0,0,0,1);
}
.isi p{
  font-size: 15px;
  margin-bottom: 0;
}
.tombol_lihat{
  margin: 0;
  float: right;
  text-transform: uppercase;
  font-family: 'OpenSans', arial;
  font-weight: bold;
  font-size: 11px;
  position: relative;
  font-style: italic;
  color: #92cf48;
  padding-bottom: 10px;
}
.more_berita {
  margin: 0 auto;
  padding: 10px 0;
  width: 100%;
  background-color: #024959;
  text-align: center;
}
.more_berita a{
  color: white;
}
.tombol_lihat a{
  color: rgba(0,0,0,.5);
}
.more_berita h3 {
  margin: 0;
  color: white;
}
.tombol_lihat a:hover, .more_berita a:hover {
  color: #92cf48;
}
.galeri {
  justify-content: center;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}
.galeri img {
  margin: 5px;
  box-shadow: 3px 3px 8px 0px rgba(0,0,0,0.3);
  max-width: 17vw;
  /* width: 300px; */
  height: 100%;
}
.img{
  margin: 5px;
  margin-right: 0px;
  max-width: 240px;
  height: 100%;
}
/* Lihat Artikel */
.artikel-section{
  margin: 10px 0;
}
.artikel-section .attr{
  margin-bottom: 25px;
}
.imgartikel{
  float: left;
  display: inline-block;
}
.imgartikel img{
  margin-right: 15px;
  /* width:500px; */
  max-width: 400px;
}

/* Kontak Kami */
.mainContent {
    width: 35%;
    margin: auto;
    background: #fff;
}
.contactFrm h4 {
    font-size: 1em;
    color: #252525;
    margin-bottom: 0.5em;
    font-weight: 300;
    letter-spacing: 5px;
}
.contactFrm input[type="text"], .contactFrm input[type="email"] {
    width: 70%;
    outline: none;
    font-size: 0.9em;
    padding: .7em 1em;
    border: 1px solid #000;
    -webkit-appearance: none;
    display: block;
    margin-bottom: 1.2em;
}
.contactFrm textarea {
    resize: none;
    width: 93.5%;
    font-size: 0.9em;
    outline: none;
    padding: .6em 1em;
    border: 1px solid #000;
    min-height: 10em;
    -webkit-appearance: none;
}
.contactFrm input[type="submit"] {
    outline: none;
    color: #FFFFFF;
    padding: 0.5em 0;
    font-size: 1em;
    margin: 1em 0 0 0;
    -webkit-appearance: none;
    background: #024959;
    transition: 0.5s all;
    border: 2px solid #024959;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    -moz-transition: 0.5s all;
    width: 47%;
    cursor: pointer;
}
.contactFrm input[type="submit"]:hover {
    background: none;
    color: #024959;
}
/* #024959 */
p.statusMsg{font-size:18px;}
p.succdiv{color: #008000;}
p.errordiv{color:#E80000;}
/* navbar */
.navbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 7%;
    background-color: #1e3a5d; 
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
.dropdown {
    position: relative;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #1e3a5d; /* Dark Blue color */
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 100;  
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
/* Adjust the width of the container on small screens */
.container {
  max-width: 100%;
}
.logo{
  width: 100px;
  height: auto;
}
.jumbotron{
  position:relative;
  display:flex;
  align-items:center;
  background-position: center;
  background:url(assets/images/bg1.jpg);
  background-size: cover;
  background-repeat:no-repeat;
  min-height: 100vh;
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
        <a href="index.php" class="logo"><img src="logo.jpg" alt="logo"></a>
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