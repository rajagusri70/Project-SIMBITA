<?php
include('konek.php');
?>

<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylelogin/admin.css">

  <script src="js/scriptadmin.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Admin</title>
</head>

<body>
  <!--navbar-->
  <nav>
    <ul>
      <li class="navbar-font">Admin</li>
    </ul>
  </nav>
  <!-- Sidebar -->

  <div class="sidebar bar-block light-grey card-2" style="width:250px;">
    <button class="button block left-align ">
      <a href="admin-page-1.php" class="lbutton" >Menambah User</a>
    </button>

    <button class="button block left-align accordion" onclick="firstAccFunc()">
      Data Pejabat Fakultas<i class="fa fa-caret-down"></i>
    </button>
    <div id="firstAcc" class="hide white card-2 panel">
      <a href="admin-page-2a.php" class="bar-item button">Tambah Fakultas</a>
      <a href="admin-page-2b.php" class="bar-item button">Tambah Jurusan</a>
      <a href="admin-page-2c.php" class="bar-item button">Tambah Program Studi</a>
      <a href="admin-page-2d.php" class="bar-item button">Tambah Dekan Fakultas</a>
      <a href="admin-page-2e.php" class="bar-item button">Tambah Pejabat Jurusan</a>
      <a href="admin-page-2f.php" class="bar-item button">Tambah Pejabat Program Studi</a>
    </div>

    <button class="button block left-align" onclick="secondAccFunc()">
      Pengguna <i class="fa fa-caret-down"></i>
    </button>
    <div id="secondAcc" class="hide white card-2">
      <a href="admin-page-3a.php" class="bar-item button">Tambah Detail Operator</a>
      <a href="admin-page-3b.php" class="bar-item button">Tambah Detail Program Studi</a>
      <a href="admin-page-3c.php" class="bar-item button">Tambah Detail Dosen</a>
      <a href="admin-page-3d.php" class="bar-item button">Tambah Mahasiswa </a>
    </div>

    <button class="button block left-align" onclick="thirdAccFunc()">
      Aktifitas Akademik <i class="fa fa-caret-down"></i>
    </button>
    <div id="thirdAcc" class="hide white card-2">
      <a href="admin-page-4.php" class="bar-item button">Tambah Tahun Akademik Kegiatan Akademis</a>
      <a href="" class="bar-item button">Surat Keputusan</a>
      <!-- <a href="" class="bar-item button">Penasehat Akademik</a>
           <a href="" class="bar-item button">Usulan SK Pembimbing</a>
           <a href="" class="bar-item button">Usulan SK Pelaksanaan Ujian Skripsi</a>-->
      <a href="" class="bar-item button">Pembimbningan Penasehat Akademik</a>
      <a href="" class="bar-item button">Pembimbingan Tugas Akhir</a>
      <!-- <a href="" class="bar-item button">Proposal Penilitian</a>
           <a href="" class="bar-item button">Skripsi</a>
           <a href="" class="bar-item button">Artikel Ilmiah</a>-->
    </div>

    <button class="button block left-align" onclick="fourthAccFunc()">
      Pelaksanaan Ujian <i class="fa fa-caret-down"></i>
    </button>
    <div id="fourthAcc" class="hide white card-2">
      <a href="" class="bar-item button">Proposal Penelitian</a>
      <a href="" class="bar-item button">Seminar Hasil</a>
      <a href="" class="bar-item button">Ujian Skripsi</a>
    </div>

    <button class="button block left-align" onclick="fifthAccFunc()">
      Penilaian / Rekomendasi <i class="fa fa-caret-down"></i>
    </button>
    <div id="fifthAcc" class="hide white card-2">
      <a href="" class="bar-item button">Ujian Proposal Penilitian</a>
      <a href="" class="bar-item button">Seminar Hasil</a>
      <a href="" class="bar-item button">Ujian Skripsi</a>
    </div>

    <button class="button block left-align" onclick="sixthAccFunc()">
      Form Penilaian & Berita Acara <i class="fa fa-caret-down"></i>
    </button>
    <div id="sixthAcc" class="hide white card-2">
      <a href="" class="bar-item button">Proposal Penilitian</a>
      <a href="" class="bar-item button">Seminar Hasil</a>
      <a href="" class="bar-item button">Ujian Skripsi</a>
    </div>

    <button class="button block left-align" onclick="seventhAccFunc()">
      Rekapitulasi <i class="fa fa-caret-down"></i>
    </button>
    <div id="seventhAcc" class="hide white card-2">
      <a href="" class="bar-item button">Data Dosen</a>
      <a href="" class="bar-item button">Data Mahasiswa</a>
      <a href="" class="bar-item button">Data Penasehat Akademik</a>
      <a href="" class="bar-item button">Data Pembimbing 1</a>
      <a href="" class="bar-item button">Data Pembimbing 2</a>
      <a href="" class="bar-item button">Data Penguji</a>
      <!-- <a href="" class="bar-item button">Proposal Penilitian</a>
           <a href="" class="bar-item button">Seminar Hasil</a>
           <a href="" class="bar-item button">Ujian Skripsi</a> -->
      <a href="" class="bar-item button">Data Pelaksanaan Ujian</a>
      <!-- <a href="" class="bar-item button">Proposal Penilitian</a>
           <a href="" class="bar-item button">Seminar Hasil</a> 
           <a href="" class="bar-item button">Ujian Skripsi</a>-->
      <a href="" class="bar-item button">Data Aktivitas Akademik</a>
      <!-- <a href="" class="bar-item button">Penasehat Akademik</a>
           <a href="" class="bar-item button">Pembimbingan Proposal Penilitian</a>
           <a href="" class="bar-item button">Pembimbingan Skripsi</a>-->
      <a href="" class="bar-item button">Data Lama Penyelesaian Tugas Akhir</a>
      <a href="" class="bar-item button">Data Lama Masa Studi</a>
    </div>

    <button class="button block left-align ">
      <a href="" class="lbutton" >Upload File</a>
    </button>

    <button class="button block left-align ">
      <a href="" class="lbutton" >Log Report</a>
    </button>

    <button class="button block left-align ">
      <a href="" class="lbutton" >Backup dan Restore Data</a>
    </button>

  </div>
  <!-- Form -->
  <div class="container">
    <h1> Menambah User </h1>
    <form action="tambah_pengguna.php" method="POST">

      <label for="user"><p>User Name</p></label>
        <input type="text" id="user" name="username" placeholder="Input user name">

        <label for="password"><p>Password</p></label>
          <input type="text" id="password" name="password" placeholder="Input password">

          <label for="status"><p>Status</p></label>
          <select id="status" name="status">
            <option value="1">ACC</option>
            <option value="0">BELUM ACC</option>

          </select>

            <label for="level"><p>Level</p></label>
              <select id="level" name="level">
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Administrator">Administrator</option>
                <option value="Program Studi">Program Studi</option>
                <option value="Operator">Operator</option>
              </select>
              <br>
              <input type="submit" value="Submit" name="tambah">
            </form>
          </div>



          <!-- Footer -->
          <div>
            <footer class="footfont foot"> Copyright &copy 2017</footer>
          </div>



        </body>
        </html>
