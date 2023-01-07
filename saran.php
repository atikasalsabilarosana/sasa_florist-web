<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saran</title>
  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
			<form action="saran_action.php" method="POST">
			<h2 class="mb-3">Kritik dan Saran</h2>
			 <div class="form-group mb-3">
			    <label for="email">E-mail</label>
			    <input type="text" class="form-control mt-2" id="email" name="email" placeholder="Masukkan email">
			 </div>
			  <div class="form-group mb-3">
			    <label for="saran">Saran</label>
			    <input type="text" class="form-control mt-2" id="saran" name="saran" placeholder="Masukkan saran">
			  </div> 
			  <div class="form-group mb-3">
			    <label for="kritik">Kritik</label>
			    <input type="text" class="form-control mt-2" id="kritik" name="kritik" placeholder="Masukkan kritik">
			  </div> 
			  <input type="submit" name="kirim" value="KIRIM" class="btn shadow px-3 btn-primary">
		</form>
		</div>
	</div>
	
</body>
</html>