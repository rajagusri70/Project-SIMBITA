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
    <h1> Tambah Detail Operator </h1>

    <form>
      <label for="level"><p>Level<p></label>
        <select id="level" name="level">
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="Dosen">Dosen</option>
          <option value="Administrator">Administrator</option>
          <option value="Program Studi">Program Studi</option>
          <option value="Operator">Operator</option>
        </select>

      <label for="user"><p>User Name<p></label>
        <input type="text" id="user" name="userName" placeholder="Input user name">

        <label for="password"><p>Password<p></label>
          <input type="text" id="password" name="password" placeholder="Input password">

          <br>
          <input type="submit" value="Submit" name="edit">
    </form>

    <form action="tambah_detail_op.php" method="POST" enctype="multipart/form-data">

      <?php
        include('konek.php');
        $pilih	= 'SELECT nama_fak FROM fakultas ORDER BY kode_fak ASC;';
        $sql	= mysqli_query($db_link,$pilih);
        $pilih2	= 'SELECT nama_jur FROM jurusan ORDER BY nama_jur ASC;';
        $sql2	= mysqli_query($db_link,$pilih2);
        $pilih3	= 'SELECT nama_ps FROM program_studi ORDER BY nama_ps ASC;';
        $sql3	= mysqli_query($db_link,$pilih3);
      ?>



          <label for="user"><p>Kode Operator<p></label>
            <input type="text" id="user" name="kode" placeholder="Input Kode Operator">

          <label for="namalengkap"><p>Nama Lengkap<p></label>
            <input type="text" id="namalengkap" name="nama" placeholder="nama lengkap ">


        <label for="fakultas"><p>Fakultas<p></label>
          <select id="fakultas" name="nama_fak">
            <option>--Pilih fakultas--</option>
            <?php while ($row = mysqli_fetch_array($sql)) { ?>
              <option><?php echo $row["nama_fak"]; ?></option>
            <?php } ?>
          </select>

          <label for="jurusan"><p>Jurusan<p></label>
            <select id="jarusan" name="nama_jur">
              <option>--Pilih Jurusan--</option>
              <?php while ($row = mysqli_fetch_array($sql2)) { ?>
                <option><?php echo $row["nama_jur"]; ?></option>
              <?php } ?>
            </select>

            <label for="prodi"><p>Pogram Studi<p></label>
              <select id="prodi" name="nama_ps">
                <option>--Program Studi--</option>
                <?php while ($row = mysqli_fetch_array($sql3)) { ?>
                  <option><?php echo $row["nama_ps"]; ?></option>
                <?php } ?>
              </select>

              <label for="upload"><p>Upload Foto Profil<p></label>
              <pre><input type="file" id="upload" value="Upload foto" name="foto" accept="image/*"></pre>
              <!-- codena ku tth ae yah tebisa hehe-->
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
