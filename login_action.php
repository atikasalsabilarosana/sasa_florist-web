	<?php
	include "koneksi.php";
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query="SELECT * FROM members WHERE email = '".$email."'";
	$sql = $koneksi->query($query);
	while($result = mysqli_fetch_array($sql)){
		if($email == $result['email'] && $password == $result['password']){
			header("location: index.php");
		}
		else{
			echo "Error " . mysqli_error($koneksi);
		}
	}
	?>