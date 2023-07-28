<?php
include 'layout/header.php';
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <div class="container">
  <div class="content">
    <div class="berita">
      <div class="judul_section">
        <h1>PROFIL DESA</h1>
        <hr> <br>
        <table class="table">
            <thead>
                <tr>
                    <th><h2 style="text-align: center;">10 PROGRAM POKOK PKK</h2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center; line-height:1.6rem"> Penghayatan dan Pengamalan Pancasila <br>
                     Gotong Royong <br>
                     Pangan <br>
                     Sandang <br>
                     Perumahan dan Tata Laksana Rumah Tangga <br>
                     Pendidikan dan Keterampilan <br>
                     Kesehatan <br>
                     Pengembangan Kehidupan Berkoperasi <br>
                     Kelestarian Lingkungan Hidup <br>
                     Perencanaan Sehat</td>
                </tr>
            </tbody>
        </table> <br>
        </div>
    </div>
    </div>
  </div>
  </body>
  </html>

    <?php require 'layout/footer.php'; ?>
    <style>
    /* CSS untuk menambahkan border pada tabel */
    .table {
      border-collapse: collapse;
      width: 100%;
    }

    .table th, .table td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    /* Optional: Tambahkan styling tambahan jika diperlukan */
    .table th {
      background-color: #f2f2f2;
    }

    .table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
