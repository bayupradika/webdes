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
          <h1 style="text-align: center; padding-top:1rem;">Struktur Perangkat Desa</h1>
          <hr>
          <h2>SUSUNAN ORGANISASI<br>PEMERINTAHAN DESA SALO TIMUR <br> KECAMATAN SALO KABUPATEN KAMPAR</h2><br>
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
                <td>H.Tukiran</td>
                <td>Kepala Desa</td>
                <td>L</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Syahroni</td>
                <td>Sekretaris Desa</td>
                <td>L</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Muhammad Fajri, S.Kep.</td>
                <td>Kasi Pemerintahan</td>
                <td>L</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Mutia Afrida</td>
                <td>Kasi Kesejahteraan dan Pelayanan</td>
                <td>P</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Nurbaiti, S.Ag.</td>
                <td>Kaur Keuangan</td>
                <td>P</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Joni Kurniawan, S.Pd.</td>
                <td>Kaur Umum</td>
                <td>L</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Beni Sunariyo</td>
                <td>Kaur Perencanaan</td>
                <td>L</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Zamri</td>
                <td>Kepala Dusun Kampung Baru</td>
                <td>L</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Al Aziz</td>
                <td>Kepala Dusun Merbau</td>
                <td>L</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Muhammad Rafiq</td>
                <td>Kepala Dusun Koto Menanti</td>
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
  /* CSS untuk menambahkan border pada tabel */
  .table {
    border-collapse: collapse;
    width: 100%;
  }

  .table th,
  .table td {
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