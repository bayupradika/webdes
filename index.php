<?php
require 'layout/header.php';
?>

<div class="jumbotron">
  <div class="inner">
    <h1>Desa Salo Timur</h1>
    <h3>Kecamatan Salo, Kabupaten Kampar</h3>

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
    <style>
      /* Custom styles */
body {
  font-family: Arial, sans-serif;
}

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
  