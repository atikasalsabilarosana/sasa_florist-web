<?php
include 'koneksi.php';

 $id_pengembalian = $_POST['id_pengembalian'];
 $jumlah_barang = $_POST['jumlah_barang'];
 $query_edit = "UPDATE riwayatpengembalian SET jumlah_barang='".$jumlah_barang."' WHERE id_pengembalian='".$id_pengembalian."'";
 $result_edit = $koneksi->query($query_edit);
 if($result_edit){
   header('location: riwayat_return.php');
  } else{
   echo 'Edit Data Gagal';
 }
?>