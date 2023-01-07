<?php
	include "koneksi.php";

	$email = $_POST['email'];
	$saran = $_POST['saran'];
	$kritik = $_POST['kritik'];
		if($_POST['kirim']){
		$query = "INSERT INTO saran(email,saran,kritik) VALUES('".$email."','".$saran."','".$kritik."')";
		$sql = $koneksi->query($query);
		if($sql){
			header("location: saran.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	} 
 ?>