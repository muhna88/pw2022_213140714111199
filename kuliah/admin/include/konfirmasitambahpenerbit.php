<?php 
$id_penerbit = $_SESSION [`id_penerbit`];
$penerbit = $_POST['penerbit'];
$alamat = $_POST['alamat'];

if(empty($penerbit)){
	header("Location:index.php?include=tambah-penerbit&notif=tambahpenerbitkosong");
}if (empty($alamat)){
        header("Location:index.php?include=tambah-penerbit&notif=tambahpenerbitkosong");
}else{
	$sql = "insert into `penerbit` (`penerbit`, `alamat`) 
	values ('$penerbit', '$alamat')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=penerbit&notif=tambahberhasil");	
}
?>
