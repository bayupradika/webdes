<?php
require 'layout/header.php';
?>

<div class="jumbotron">
  <img src="bg.jpg" alt="">
  <div class="inner">
    <h1>Desa Salo Timur</h1>
    <h3>Kecamatan Salo, Kabupaten Kampar</h3>

  </div>
</div>
<div class="container">
  <div class="content">
    <div class="berita">
      <div class="judul_section">
        <h1>BERANDA</h1>
        <hr>
        
      </div>
    </div>
  </div>
</div>
    <?php require 'layout/footer.php'; ?>
    <style>
      /* Custom styles */

/* Adjust the width of the container on small screens */
.container {
  max-width: 100%;
}

/* Center the text in the .jumbotron on small screens */
.jumbotron .inner {
  text-align: center;
}

/* Increase font size on small screens */
.jumbotron h1 {
  font-size: 30px;
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



/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
  .jumbotron h1 {
    font-size: 48px;
  }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .judul_section .row {
    flex-direction: row;
  }
}

    </style>
  