<?php
require 'layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BPD</title>
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="berita">
        <div class="judul_section">
          <h1 style="text-align: center; padding-top:1rem;">Visi & Misi Desa</h1>
          <hr><br>
          <h2>Visi</h2>
          <div class="visi" style="width: 60%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin:auto;">
            <img src="assets/images/visi.jpg" alt="">
            <p>Rumusan Visi tersebut merupakan suatu ungkapan dari suatu niat yang luhur
              untuk memperbaiki dalam Penyelenggaraan Pemerintahan dan Pelaksanaan
              Pembangunan di Desa Salo Timur baik secara individu maupun kelembagaan
              sehingga 6 ( enam ) tahun ke depan Desa Salo Timur mengalami suatu
              perubahan yang lebih baik dan peningkatan kesejahteraan masyarakat dilihat
              dari segi ekonomi dengan dilandasi semangat kebersamaan dalam
              Penyelenggaraan Pemerintahan dan Pelaksanaan Pembangunan.</p>
          </div>
          <br>
          <h2>Misi</h2>
          <div class="kubus" style="width: 60%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin:auto;"></div>
          <img src="assets/images/misi.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

</body>

</html>
<?php require 'layout/footer.php'; ?>
<style>
  .balok {
    margin: auto;
    padding: 10px;
  }

  .balok img {
    width: 40%;
  }

  .kubus {
    width: 50%;
    display: flex;
    justify-content: left;
    align-items: center;
    margin: auto;
  }
</style>