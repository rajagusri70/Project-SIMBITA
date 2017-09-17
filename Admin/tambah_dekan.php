<?php
include('konek.php');
if(isset($_POST['tambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$kode	= $_POST['kode_dek'];
	$nama	= $_POST['nama_dek'];
	$nip	= $_POST['nip'];
	$fak	= $_POST['nama_fak'];

	$sql	= 'insert into dekan_fak values ("'.$kode.'","'.$nama.'","'.$nip.'","'.$fak.'")';
	$query	= mysqli_query($db_link,$sql);

	if($query){
		header('location: sukses_insert.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		header('location: gagal_insert.php');
	}
}
?>
