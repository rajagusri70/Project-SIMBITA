<?php
$message  = '';
$valid_file  = true;
$max_size  = 1024000; // Ukuran maksimal file yang akan diupload (dalam byte)


if($_FILES['photo']['name']){
 // if no errors...
 if(!$_FILES['photo']['error']){

  // now is the time to modify the future file name and validate the file
  $new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file menjadi huruf kecil
  if($_FILES['photo']['size'] > $max_size) //file tidak boleh lebih besar dari ukuran maksimal
  {
   $valid_file = false;
   $message = 'Maaf, file terlalu besar. Max: 1MB';
  }



  // Mengatur format file yang boleh diupload
  $image_path = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION); //ambil extensi file
  $extension = strtolower($image_path); //rename extensi file menjadi huruf kecil

  if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" ) {
   $valid_file = false;
   $message = "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG & GIF. #".$extension;
  }



  // jika file lolos filter
  if($valid_file == true)
  {
   // mengganti nama gambar
   $rename_nama_file = date('YmdHis');
   $nama_file_baru  = $rename_nama_file.'.'.$extension;


   // simpan ke database
   $sql = "INSERT INTO operator (foto) VALUES(null, '$nama_file_baru', '$keterangan')";
   if (!mysqli_query($koneksi, $sql)) {
    echo "Error: ".mysqli_error($koneksi)."
";
    die('. Gagal mengupload gambar.');
   }

   //memindahkan gambar ke tempat yang kita inginkan
   move_uploaded_file($_FILES['photo']['tmp_name'], 'data_gambar/'.$nama_file_baru);
   $message = 'Gambar berhasil diupload!';
   die($message);
  }
 }
 //if there is an error...
 else
 {
  //set that to be the returned message
  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
 }
}
?>
