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
        <h1>BPD</h1>
        <hr>
        <h2>NAMA-NAMA ANGGOTA BADAN PERMUSYAWARATAN DESA (BPD) PERIODE 2020-2025</h2><br>
    <table class="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JABATAN</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Andi Syafrianto</td>
            <td>Ketua</td>
            <td>L</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Abu Bakar</td>
            <td>Wakil Ketua</td>
            <td>L</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Indros Piliati</td>
            <td>Sekretaris</td>
            <td>L</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Kadirudin</td>
            <td>Anggota</td>
            <td>L</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Eka Putra</td>
            <td>Anggota</td>
            <td>L</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Koes Hariyanto</td>
            <td>Anggota</td>
            <td>L</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Evis Raniati</td>
            <td>Anggota</td>
            <td>P</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Darisman</td>
            <td>Anggota</td>
            <td>L</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Kusno</td>
            <td>Anggota</td>
            <td>L</td>
        </tr>
    </tbody>
</table>
      </div>
      </div>
    </div>
</div>
   
</body>
</html>

    <?php require 'layout/footer.php'; ?>
    <style>
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