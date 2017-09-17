<?php
include('konek.php');
if(isset($_POST['tambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$user	= $_POST['username'];
	$pass	= $_POST['password'];
	$level	= $_POST['level'];
	$status	= $_POST['status'];

	$sql	= 'insert into login values ("'.$user.'","'.$pass.'","'.$level.'","'.$status.'")';
	$query	= mysqli_query($db_link,$sql);

	if($query){
		header('location: sukses_insert.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		header('location: gagal_insert.php');
	}
}
?>
