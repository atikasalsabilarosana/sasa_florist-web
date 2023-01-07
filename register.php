<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
	.container-fluid{
		height: 100vh;
	}
	.container{
		width: 550px;
	}
	form .btn{
		float:  right;
	}
</style>
<body style = "background-image: url(assets/img/background2.jpg);">
	<div class="container-fluid d-flex justify-content-center align-items-center">
		<div class="container shadow p-4">
			<form action="register_action.php" method="POST">
			<h2 class="mb-3">Register</h2>
			 <div class="form-group mb-3">
			    <label for="nama">Nama</label>
			    <input type="nama" class="form-control mt-2" id="nama" name="nama" placeholder="Masukkan nama">
			 </div>
			  <div class="form-group mb-3">
			    <label for="username">Username</label>
			    <input type="username" class="form-control mt-2" id="username" name="username" placeholder="Masukkan username">
			  </div>
			   <div class="form-group mb-3">
			    <label for="password">Email</label>
			    <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Masukkan email">
			  </div>
			  <div class="form-group mb-3">
			    <label for="password">Password</label>
			    <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Masukkan password">
			 </div>
			   <div class="form-group mb-3">
    			<label for="jk">Jenis Kelamin</label>
   				<select class="form-control mt-2" id="jk" name="gender">
   				<option>Masukkan jenis kelamin</option>
      			<option>Laki-laki</option>
      			<option>Perempuan</option>
      			</select>
      		</div>
      		<div class="form-group mb-3">
    			<label for="alamat">Alamat</label>
    			<textarea class="form-control mt-2" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
  				</div>
			  <input type="submit" name="register" value="Register" class="btn shadow px-3 btn-primary">
		</form>
		</div>
	</div>
</body>
</html>