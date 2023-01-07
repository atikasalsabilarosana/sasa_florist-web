<?php
include 'koneksi.php';
if(isset($_GET['Hapus'])){
 $id_pengembalian = $_GET['Hapus'];
 $hapus_query = "DELETE FROM riwayatpengembalian WHERE id_pengembalian=$id_pengembalian";
 $result_hapus = $koneksi->query($hapus_query);
 if($result_hapus){
  $in_query = "ALTER TABLE riwayatpengembalian AUTO_INCREMENT = 1";
  $result_in = $koneksi->query($in_query);
  if($result_in){
   header('location: riwayat_return.php');
  } else{
   echo 'Hapus Data Gagal';
  }
 }else{
  echo 'Hapus Data Gagal';
 }
}
?>