<?php
# Konek ke Web Database
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "";
$myDbs	= "db_perpus";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>