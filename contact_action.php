<?php
	include "koneksi.php";

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
		if($_POST['bantuan']){
		$query = "INSERT INTO bantuan(nama,email,subject,message) VALUES('".$nama."','".$email."','".$subject."','".$message."')";
		$sql = $koneksi->query($query);
		if($sql){
			header("location: contact.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	}   
?>