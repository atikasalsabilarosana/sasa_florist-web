<?php
	include "koneksi.php";
	$id_pengembalian = $_POST['id_pengembalian'];
	$nama_barang = $_POST['nama_barang'];
	$total_harga = $_POST['total_harga'];
	$alasan = $_POST['alasan'];
	if($_POST['beli']){
		$query = "INSERT INTO pengembalian (id_pengembalian, nama_barang, total_harga, alasan) VALUES('".$id_pengembalian."', '".$nama_barang."', '".$total_harga."', '".$alasan."')";
		$sql = $koneksi->query($query);
		if($sql){
			header("location: pengembalian.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	}
?>