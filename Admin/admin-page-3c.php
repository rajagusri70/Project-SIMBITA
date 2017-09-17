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
    <h1> Tambah Detail Dosen </h1>
    <form>

      <label for="user"><p>User Name</p></label>
        <input type="text" id="user" name="userName" placeholder="Input user name">

        <label for="password"><p>Password</p></label>
          <input type="text" id="password" name="password" placeholder="Input password">
          <input type="submit" value="Edit">

<h2>Identitas Dosen</h2>
<label for="namalengkap"><p>Nama Lengkap<p></label>
  <input type="text" id="namalengkap" name="namalengkap" placeholder="nama lengkap ">

  <label for="nip"><p>NIP<p></label>
    <input type="text" id="nip" name="nip" maxlength="18" placeholder="Input NIP">

    <label for="nidn"><p>NIDN<p></label>
      <input type="text" id="nidn" name="nidn" maxlength="18" placeholder="Input NIDN">

  <action="/action_page.php">
<label for="date"><p> Tempat/Tanggal Lahir </p><label>
  <input type="text" id="ttl" name="ttl" placeholder="Input tempat lahir">
  <input type="date" name="bday">

  <label for="gender"> <p>Jenis Kelamin</p><label>
    <input type="radio" name="gender" value="male">Laki-laki <br>
    <input type="radio" name="gender" value="female">Perempuan <br>


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

                <label for="prodi"><p>Pogram Studi</p></label>
                  <select id="prodi" name="prodi">
                    <option value="1">Pogram Studi 1</option>
                    <option value="2">Pogram Studi 1</option>
                    <option value="3">Pogram Studi 1</option>
                  </select>

    <h2>Identitas Kepegawaian</h2>
    <label for="golpangkat"><p>Golongan/Pangkat</p></label>
      <input type="text" id="golpangkat" name="golpangkat" placeholder="Input Golongan/Pangkat "><br>

        <input type="button" id="golpangkat" name="golpangkat" value="Upload SK">
        <label for="tmtgolpangkat"><p>TMT Golongan/Pangkat</p></label>
          <input type="text" id="tmtgolpangkat" name="tmtgolpangkat" placeholder="Input TMT Golongan/Pangkat ">
          <label for="jabatan"><p>Jabatan Akademik</p></label>
            <input type="text" id="jabatan" name="jabatan" placeholder="Input Jabatan Akademik "><br>
              <input type="button" id="jabatan" name="jabatan" value="Upload SK">
              <label for="tmtgolpangkat"><p>TMT Jabatan Akademik</p></label>
                <input type="text" id="tmtgolpangkat" name="tmtgolpangkat" placeholder="Input TMT Jabatan Akademik ">
                <label for="tahunserti"><p>Tahun Sertifikasi Dosen</p></label>
                  <input type="text" id="tahunserti" name="tahunserti" placeholder="Input Tahun Sertifikasi "><br>
                  <input type="button" id="tahunserti" name="tahunserti" value="Upload Sertifikasi">
                  <label for="upfoto"><p>Upload Foto</p></label>
                  <input type="button" id="upfoto" name="upfoto" value="Upload Foto"><br>

                  <label for="riwayat"><p>Riwayat Pendidikan </p></label>
                  <input type="button" id="riwayat" name="riwayat" value="Riwayat Pendidikan">
                  <label for="riwayat"><p>Riwayat Pengajaran</p></label>
                  <input type="button" id="riwayat" name="riwayat" value="Riwayat Pengajaran"><br>
                  <label for="riwayat"><p>Riwayat Penelitian</p></label>
                  <input type="button" id="riwayat" name="riwayat" value="Riwayat Penelitian"><br>
                  <label for="riwayat"><p>Riwayat Pengabdian</p></label>
                  <input type="button" id="riwayat" name="riwayat" value="Riwayat Pengabdian"><br>
                  <label for="riwayat"><p>Riwayat Penunjang</p></label>
                  <input type="button" id="riwayat" name="riwayat" value="Riwayat Penunjang"><br>

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
