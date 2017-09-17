<?php
include('konek.php');
if(isset($_POST['tambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$kode	= $_POST['kode_ps'];
	$nama	= $_POST['nama_ps'];
	$jur	= $_POST['nama_jur'];
	$fak	= $_POST['nama_fak'];

	$sql	= 'insert into program_studi values ("'.$kode.'","'.$nama.'","'.$jur.'","'.$fak.'")';
	$query	= mysqli_query($db_link,$sql);

	if($query){
		header('location: sukses_insert.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		header('location: gagal_insert.php');
	}
}
?>
