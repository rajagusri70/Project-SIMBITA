<?php
include('konek.php');
if(isset($_POST['tambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$kode	= $_POST['nip'];
	$nama	= $_POST['nama'];
	$jur	= $_POST['nama_fak'];
	$fak	= $_POST['nama_jur'];

	$sql	= 'insert into pejabat_jurusan values ("'.$kode.'","'.$nama.'","'.$jur.'","'.$fak.'")';
	$query	= mysqli_query($db_link,$sql);

	if($query){
		header('location: sukses_insert.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		header('location: gagal_insert.php');
	}
}
?>
