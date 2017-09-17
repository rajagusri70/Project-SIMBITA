<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

      <link rel="stylesheet" href="stylelogin/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<!-- form login -->

    <div id="login">
      <h1> A K T I F A S I </h1>
      <form name='form-login' action="" method="post">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="username" placeholder="NIP/NIM">

        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="email" placeholder="Email">

        <input type="submit" value="Aktifasi" name="kirim">
          <a href=log.php> Login </a>

</form>

<?php
	if(isset($_POST['kirim'])) {

		define('ROOT', 'http://localhost/simbi');
		$kode	= md5(uniqid(rand()));
    $conn = mysqli_connect('localhost', 'root', '', 'simbita');
    $user= $_POST['username'];
		$to 	= $_POST['email'];
		$judul 	= "Aktivasi Akun Anda";
		$dari	= "From: simbita@unri.com \n";
		$dari	.= "Content-type: text/html \r\n";

		$pesan	= "Klik link berikut untuk mengaktifkan akun: <br />";
		$pesan	.= "<a href='".ROOT."konfirm.php?email=".$_POST['email']."&kode=$kode&username=".$_POST['username']."'>".ROOT."konfirm.php?email=".$_POST['email']."&kode=$kode</a>";

     ini_set("SMTP","smtp.gmail.com");
     ini_set("smtp_port","587");

		if(mail($to, $judul, $pesan, $dari))
		{
			echo "<p class=info>Berhasil Dikirim</p>";
		}
		else
		{
			echo "<p class=infoGagal>Gagal Dikirim</p>";
		}

	}
?>
</div>

<!-- footer -->
<footer> <p class="footfont"> Copyright &copy 2017</p></footer>

</body>
</html>
