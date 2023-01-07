<?php
	include "koneksi.php";
	$email = $_POST['email'];
	if($_POST['subscribe']){
		$query = "INSERT INTO subscibe(email) VALUES('".$email."')";
		$sql = $koneksi->query($query);
		if($sql){
			header("location: index.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	} 
 ?>