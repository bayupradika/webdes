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
        <h1 style="text-align: center; padding-top:1rem;">KELOMPOK TANI</h1>
        <hr>
        <h2>NAMA-NAMA KELOMPOK TANI DESA SALO TIMUR</h2><br>
    <table class="table">
    <thead>
        <tr>
            <th>NAMA KELOMPOK</th>
            <th>KETUA</th>
            <th>SEKRETARIS</th>
            <th>JUMLAH ANGGOTA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>SUNGAI SIALANG </td>
            <td>FIRMAN</td>
            <td>MURNIATI</td>
            <td>28 ORANG</td>
        </tr>
        <tr>
            <td>BERKAT YAKIN</td>
            <td>ENI ASNITA</td>
            <td>MARIATI</td>
            <td>30 ORANG</td>
        </tr>
        <tr>
            <td>MAJU BERSAMA</td>
            <td>JASNELI</td>
            <td>YUSMA KARTINI</td>
            <td>43 ORANG</td>
        </tr>
        <tr>
            <td>SETIA USAHA</td>
            <td>NAZARUDDIN</td>
            <td>HERI ARMANSYAH</td>
            <td>24 ORANG</td>
        </tr>
        <tr>
            <td>MEKAR</td>
            <td>MUTIA AFRIDA</td>
            <td>SYAFRULI HIDAYAT</td>
            <td>49 ORANG</td>
        </tr>
        <tr>
            <td>MERBAU</td>
            <td>SITI ZAINUN</td>
            <td>TRI MULYANI</td>
            <td>60 ORANG</td>
        </tr>
        <tr>
            <td>KOTO MENANTI</td>
            <td>KUSNO</td>
            <td>M. REZA</td>
            <td>37 ORANG</td>
        </tr>
        <tr>
            <td>TUNAS HARAPAN</td>
            <td>ALAM ALATAS</td>
            <td>NURZAL</td>
            <td>31 ORANG</td>
        </tr>
        <tr>
            <td>ANGGREK MERAH</td>
            <td>NADRA</td>
            <td>SUSI MELFIANTI</td>
            <td>25 ORANG</td>
        </tr>
        <tr>
            <td>INDAH BERSAMA</td>
            <td>NURBAITI</td>
            <td>-</td>
            <td>22 ORANG</td>
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
      text-align: center;
    }

    /* Optional: Tambahkan styling tambahan jika diperlukan */
    .table th {
      background-color: #f2f2f2;
    }

    .table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    @media screen and (max-width:789px) {

      .table th, .table td {
      border: 1px solid black;
      font-size: 12px;
      text-align: center;
    }

    }
  </style>
