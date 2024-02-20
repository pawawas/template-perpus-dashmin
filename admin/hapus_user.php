<?php
include('koneksi.php');

$id    = $_GET['id'];
$sql    = "DELETE FROM user WHERE Userid='$id'";
$query    = mysqli_query($koneksidb, $sql);
if ($query) {

    echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'user.php'; 
		</script>";
} else {
    echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'user.php'; 
		</script>";
}
