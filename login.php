<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<form action="login_action.php" method="POST">
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
			<form action="login_action.php" method="POST">
			<h2 class="mb-3">Login</h2>
			 <div class="form-group mb-3">
			    <label for="email">E-mail</label>
			    <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Masukkan email">
			 </div>
			  <div class="form-group mb-3">
			    <label for="password">Password</label>
			    <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Masukkan password">
			  </div> 
			  <input type="submit" name="login" value="SignIn" class="btn shadow px-3 btn-primary">
			  	<a href="register.php">SignUp</a>
		</form>
		</div>
	</div>
</body>
</html>