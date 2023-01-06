<?php
$koneksi = mysqli_connect("localhost","root","","katalog_buku_uts");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
