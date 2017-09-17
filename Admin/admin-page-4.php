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
    <h1> Tambah Tahun Akademik Kegiatan Akademis </h1>
    <form>

      <label for="tahun"><p>Tahun Akademik</p></label>
        <input type="text" id="tahun" name="tahun" placeholder="Input tahun akademik">

        <label for="fakultas"><p>Fakultas</p></label>
          <select id="fakultas" name="fakultas">
            <option value="1">fakultas 1</option>
            <option value="2">fakultas 1</option>
            <option value="3">fakultas 1</option>
          </select>

          <label for="jurusan"><p>Jurusan</p></label>
            <select id="jarusan" name="jurusan">
              <option value="1">Jurusan 1</option>
              <option value="2">Jurusan 1</option>
              <option value="3">Jurusan 1</option>
            </select>

            <label for="prodi"><p>Pogram Studi</p</label>
              <select id="prodi" name="prodi">
                <option value="1">Pogram Studi 1</option>
                <option value="2">Pogram Studi 1</option>
                <option value="3">Pogram Studi 1</option>
              </select>

              <label for="namadosen"><p>Nama Dosen</p></label>
              <input type="radio" name="namadosen" value="a">a<br>
              <input type="radio" name="namadosen" value="b">b<br>

              <label for="namamahasiswa"><p>Nama mahasiswa</p></label>
              <input type="radio" name="namamahasiswa" value="a">a<br>
              <input type="radio" name="namamahasiswa" value="b">b<br>
              <br>
              <input type="submit" value="Submit">
            </form>
          </div>



          <!-- Footer -->
          <div>
            <footer class="footfont foot"> Copyright &copy 2017</footer>
          </div>



        </body>
        </html>
