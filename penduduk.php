<?php
require 'layout/header.php';
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
        <h1>DATA PENDUDUK DESA SALO TIMUR</h1>
        <hr>
      </div>
      </div>
    </div>
    <h2>A. Data Jumlah Penduduk</h2>
    <table>
    <tbody>
        <tr>
            <td>1</td>
            <td>Jumlah Laki-Laki</td>
            <td>2264 orang</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jumlah perempuan</td>
            <td>2125 orang</td>
            
        </tr>
        <tr>
            <td>3</td>
            <td>Jumlah total</td>
            <td>4389 orang</td>
            
        </tr>
        <tr>
            <td>4</td>
            <td>Jumlah kepala keluarga</td>
            <td>1130 KK</td>
            
        </tr>
        <tr>
            <td>5</td>
            <td>Kepadatan Penduduk</td>
            <td>365,75 per KM</td>
            
        </tr>
    </tbody>
    </table>
</body>
</html>

    <?php require 'layout/footer.php'; ?>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>