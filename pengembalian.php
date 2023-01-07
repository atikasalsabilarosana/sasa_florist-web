<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengembalian</title>
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
<body style = "background-image: url(assets/img/background2.jpg);>
	<div class="container-fluid d-flex justify-content-center align-items-center">
		<div class="container shadow p-4">
			<form action="pengembalian_action.php" method="POST">
			<h2 class="mb-3">Pengembalian</h2>
			 <div class="form-group mb-3">
			    <label for="id_barang">ID Pengembalian</label>
			    <input type="text" class="form-control mt-2" id="id_transaksi" name="id_pengembalian" placeholder="Masukkan ID Pengembalian">
			 </div>
			 <div class="form-group mb-3">
			    <label for="nama_barang">Nama Barang</label>
			    <input type="text" class="form-control mt-2" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang">
			 </div>
			 <div class="form-group mb-3">
			    <label for="total_harga">Total Harga</label>
			    <input type="text" class="form-control mt-2" id="total_harga" name="total_harga" placeholder="Masukkan total harga">
			 </div>
			  <div class="form-group mb-3">
			    <label for="alasan">Alasan</label>
			    <input type="text" class="form-control mt-2" id="alasan" name="alasan" placeholder="Masukkan alasan">
			  </div> 
			  <div class="row">
  					<div class="col-6">
  						<input type="submit" name="beli" value="Pengembalian" class="btn shadow px-3 btn-primary ml-3">	
  					</div>
  					<div class="col">
			 			<a href="riwayat_return.php" class="btn btn-primary px-4 shadow mr-3">Riwayat Pengembalian</a>
  					</div>
  				</div>
  			  </div>
		</form>
		</div>
	</div>
</body>
</html>