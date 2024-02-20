
<?php
include('koneksi.php');

$nama    = $_POST['nama'];

$sql     = "INSERT INTO kategoribuku (NamaKategori) VALUES ('$nama')";
$query     = mysqli_query($koneksidb, $sql);
if ($query) {
    echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'kategori.php'; 
		</script>";
} else {
    echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambah_kategori.php'; 
		</script>";
}
?>