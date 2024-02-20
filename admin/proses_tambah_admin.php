<?php
include('koneksi.php');

$nama    = $_POST['nama'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$namale = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$sql     = "INSERT INTO user (Username, Password, Email, NamaLengkap, Alamat, Level) VALUES ('$nama','$password','$email', '$namale', '$alamat', 'admin')";
$query     = mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'admin.php'; 
		</script>";
} else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambah_admin.php'; 
		</script>";
}
