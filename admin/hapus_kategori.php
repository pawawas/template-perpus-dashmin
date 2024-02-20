<?php
include('koneksi.php');

$id    = $_GET['id'];
$sql    = "DELETE FROM kategoribuku WHERE KategoriID='$id'";
$query    = mysqli_query($koneksidb, $sql);
if ($query) {

    echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'kategori.php'; 
		</script>";
} else {
    echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'kategori.php'; 
		</script>";
}
