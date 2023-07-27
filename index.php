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
        <h1>Postingan</h1>
        <hr>
        <div class="row">
        <div class="col-sm-3" style="width: 75%;">

        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt ab iste dolore repellat at sapiente quam voluptates obcaecati distinctio ad modi nam natus, suscipit fugiat ex ut aspernatur voluptatem! Ut.

        </div>
        <div class="col-3" style="width: 25%;">
        </div>
        </div>
      </div>
      </div>
    </div>
</div>
    <?php require 'layout/footer.php'; ?>
