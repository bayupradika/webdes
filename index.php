<?php
require 'layout/header.php';

$query  = $conn->query("SELECT kategori.* ,artikel.* FROM artikel LEFT JOIN kategori on artikel.id_kategori = kategori.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 3");
$data   = $query->fetch();
?>

<div class="jumbotron">
  <div class="inner">
    <h1>Desa Salo Timur</h1>
    <h3>Kecamatan Salo, Kabupaten Kampar</h3>
    <h3> <i class="fa fa-phone"></i> +62 852-8993-2694 (Muhammad Fajri) &nbsp;&nbsp;-&nbsp;&nbsp; <i class="fa fa-envelope"></i> desasalotimur@gmail.com </h3>
  </div>
</div>
<div class="container">
  <div class="content">
    <div class="berita">
      <div class="judul_section">
        <h1>DASHBOARD</h1>
        <hr>
      </div>
      </div>
    </div>

    <?php require 'layout/footer.php'; ?>
