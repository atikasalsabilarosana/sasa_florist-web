<?php
	include "koneksi.php";
	$nama_barang = $_POST['nama_barang'];
	$jenis_barang = $_POST['jenis_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
	$total_harga = $_POST['total_harga'];
	$alamat = $_POST['alamat'];
	if($_POST['beli']){
		$query = "INSERT INTO transaksi (nama_barang, jenis_barang, jumlah_barang, total_harga, alamat) VALUES('".$nama_barang."', '".$jenis_barang."', '".$jumlah_barang."', '".$total_harga."', '".$alamat."')";
		$sql = $koneksi->query($query);
		if($sql){
			header("location: transaksi_sukses.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	}
?>