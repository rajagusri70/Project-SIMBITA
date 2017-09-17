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
    <h1> Tambah Mahasiswa </h1>
    <form>

      <label for="user"><p>User Name</p></label>
        <input type="text" id="user" name="userName" placeholder="Input user name">

        <label for="password"><p>Password</p></label>
          <input type="text" id="password" name="password" placeholder="Input password">
          <input type="button" value="+">

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

              <h2>Identitas Mahasiswa</h2>
              <label for="namalengkap"><p>Nama Lengkap</p></label>
                <input type="text" id="namalengkap" name="namalengkap" placeholder="nama lengkap ">

                <label for="niM"><p>NIM</p></label>
                  <input type="text" id="niM" name="niM" maxlength="11" placeholder="Input NIm">

                <action="/action_page.php">
              <label for="date"><p> Tempat/Tanggal Lahir </p><label>
                <input type="text" id="ttl" name="ttl" placeholder="Input tempat lahir">
                <input type="date" name="bday">

                <label for="gender"> <p>Jenis Kelamin</p><label>
                  <input type="radio" name="gender" value="male">Laki-laki <br>
                  <input type="radio" name="gender" value="female">Perempuan <br>

                    <label for="jalurmasuk"><p>Jalur Masuk</p></label>
                      <select id="jalurmasuk" name="jalurmasuk">
                        <option value="1">Jalur Masuk 1</option>
                        <option value="2">Jalur Masuk 1</option>
                        <option value="3">Jalur Masuk 1</option>
                      </select>

                      <label for="tahunmasuk"><p>Tahun Masuk</p></label>
                        <input type="text" id="tahunmasuk" name="tahunmasuk" placeholder="Input tahun masuk">

                        <label for="tglmasuk"><p>Tanggal Masuk</p></label>
                          <input type="text" id="tglnmasuk" name="tglmasuk" placeholder="Input tanggal masuk">

                          <label for="alamat"><p>Alamat</p></label>
                            <input type="text" id="alamat" name="alamat" placeholder="Input Alamat">

                          <label for="kab"><p>Kota/Kabupaten Asal</p></label>
                            <select id="kab" name="kab">
                              <option value="1">Kabupaten 1</option>
                              <option value="2">Kabupaten 1</option>
                              <option value="3">Kabupaten 1</option>
                            </select>

                            <label for="prov"><p>Provinsi</p></label>
                              <select id="prov" name="prov">
                                <option value="1">Provinsi 1</option>
                                <option value="2">Provinsi 1</option>
                                <option value="3">Provinsi 1</option>
                              </select>

                              <h2>Identitas Keluarga</h2>
                              <label for="namalengkap"><p>Nama Ayah</p></label>
                                <input type="text" id="namalengkap" name="namalengkap" placeholder="input nama ayah ">

                                <label for="job"><p>Pekerjaan Ayah</p></label>
                                  <select id="job" name="job">
                                    <option value="1">Pekerjaan 1</option>
                                    <option value="2">Pekerjaan 1</option>
                                    <option value="3">Pekerjaan 1</option>
                                  </select>

                                <label for="namalengkap"><p>Nama Ibu</p></label>
                                  <input type="text" id="namalengkap" name="namalengkap" placeholder="input nama ibu ">

                                  <label for="job"><p>Pekerjaan Ibu</p></label>
                                    <select id="job" name="job">
                                      <option value="1">Pekerjaan 1</option>
                                      <option value="2">Pekerjaan 1</option>
                                      <option value="3">Pekerjaan 1</option>
                                    </select>

                                    <label for="alamat"><p>Alamat</p></label>
                                      <input type="text" id="alamat" name="alamat" placeholder="Input Alamat">

                                    <label for="kab"><p>Kota/Kabupaten Asal</p></label>
                                      <select id="kab" name="kab">
                                        <option value="1">Kabupaten 1</option>
                                        <option value="2">Kabupaten 1</option>
                                        <option value="3">Kabupaten 1</option>
                                      </select>

                                      <label for="prov"><p>Provinsi Asal</p></label>
                                        <select id="prov" name="prov">
                                          <option value="1">Provinsi 1</option>
                                          <option value="2">Provinsi 1</option>
                                          <option value="3">Provinsi 1</option>
                                        </select>

                                        <h2>Identitas Sekolah</h2>
                                        <label for="namalengkap"><p>Nama Sekolah</p></label>
                                          <input type="text" id="namalengkap" name="namalengkap" placeholder="input nama sekolah ">

                                          <label for="kab"><p>Kota/Kabupaten Asal</p></label>
                                            <select id="kab" name="kab">
                                              <option value="1">Kabupaten 1</option>
                                              <option value="2">Kabupaten 1</option>
                                              <option value="3">Kabupaten 1</option>
                                            </select>

                                            <label for="prov"><p>Provinsi Asal Sekolah</p></label>
                                              <select id="prov" name="prov">
                                                <option value="1">Provinsi 1</option>
                                                <option value="2">Provinsi 1</option>
                                                <option value="3">Provinsi 1</option>
                                              </select>

                                              <label for="riwayat"><p>Riwayat Beasiswa </p></label>
                                              <input type="button" id="riwayat" name="riwayat" value="Riwayat Beasiswa">
                                              <label for="riwayat"><p>Riwayat Prestasi</p></label>
                                              <input type="button" id="riwayat" name="riwayat" value="Riwayat Prestasi"><br>
                                              <label for="riwayat"><p>Riwayat Akademik</p></label>
                                              <input type="button" id="riwayat" name="riwayat" value="Riwayat Akademik"><br>

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
