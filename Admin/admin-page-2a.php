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
    <button class="button block left-align">
      <a href="admin-page-1.php" class="lbutton" >Menambah User</a>
    </button>

    <button class="button block left-align" onclick="firstAccFunc()">
      Data Pejabat Fakultas<i class="fa fa-caret-down"></i>
    </button>
    <div id="firstAcc" class="hide white card-2">
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

    </div>
  </div>
  <!-- Form -->
  <div class="container">
    <h1> Tambah Fakultas </h1>
    <form action="tambah_fakultas.php" method="POST">

      <label for="kodefakultas"><p>Kode Fakultas</p></label>
        <input type="text" id="kodefakultas" name="kode" placeholder="Input kode fakultas">

        <label for="namafakultas"><p>Nama Fakultas</p></label>
          <input type="text" id="namafakultas" name="nama" placeholder="Input nama fakultas">

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
