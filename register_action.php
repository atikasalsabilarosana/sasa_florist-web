<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$alamat = $_POST['alamat'];
	if($_POST['register']){
		$query = "INSERT INTO members(nama, username, email, password, jenis_kelamin, alamat) VALUES('".$nama."', '".$username."', '".$email."', '".$password."', '".$gender."', '".$alamat."')";
		$sql = $koneksi->query($query);
		if($sql){
			header("location: login.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	}
?>