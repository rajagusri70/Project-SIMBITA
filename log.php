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
      <h1> L O G I N </h1>
      <form action="" method="POST">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" name="user"placeholder="Username">

        <span class="fontawesome-lock"></span>
          <input type="password" id="pass" name="pass" placeholder="Password">

        <input type="submit" value="Login" name="login">
          <a href='register.php'> Register? </a>

</form>
<?php
    if (isset ($_POST['login'])){
      $conn = mysqli_connect('localhost', 'root', '', 'simbita');
      $user= $_POST['user'];
      $pass= $_POST['pass'];
      $cek_data = mysqli_query($conn, "SELECT * FROM login WHERE username ='$user' AND password = '$pass'");
      $hasil= mysqli_fetch_array($cek_data);
      $level =$hasil['level'];
      $status =$hasil['status'];
      $row = mysqli_fetch_assoc($cek_data);
      $errors	= array();

      if(empty($user) || empty($pass)){
		      echo'Masukkan Username dan Password.';
	    }elseif(mysqli_num_rows($cek_data) == 0){
		      echo'Username yang Anda masukkan tidak terdaftar.';

	     }elseif($status == 0){
		       echo'Akun Anda belum Aktif. Silahkan Klik Register. ';
	     }elseif($status == 1){
         if($level == 'admin'){
           header('location:admin.php');
         }elseif ($level == 'mahasiswa') {
           header('location:register.php');
         }elseif ($level == 'operator') {
           header('location:oprator.php');
         }
       }else{
         echo'login gagal';
       }

      if($row > 0){
        if($level == 'admin'){
          header('location:admin.php');
        }elseif ($level == 'mahasiswa') {
          header('location:register.php');
        }elseif ($level == 'operator') {
          header('location:oprator.php');
        }
      }else{
        echo'login gagal';
      }


    }
?>
</div>

<!-- footer -->
<footer> <p class="footfont"> Copyright &copy 2017</p></footer>

</body>
</html>
