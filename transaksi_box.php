<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Transaksi</title>
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
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
			<form action="transaksi_box.php" method="POST">
			<?php
				include 'koneksi.php';
				$harga = 0;
				$id_box = 0;
				if(isset($_GET['beli'])){
					$id_box = $_GET['beli'];
					$query_trans = "SELECT * FROM jenisbox WHERE id_barang_box='".$id_box."'";
					$result_trans = $koneksi->query($query_trans);
					while ($row_trans = mysqli_fetch_array($result_trans)) {
						$harga = $row_trans['harga'];
					}
				}

				$id_member = 0;
				$alamat = "";
				$query_member = "SELECT * FROM members LIMIT 1";
				$result_member = $koneksi->query($query_member);
				while($row_member = mysqli_fetch_array($result_member)){
					$id_member = $row_member['id_member'];
					$alamat = $row_member['alamat'];
				}
			?>
			<h2 class="mb-3">Detail Transaksi</h2>
			 <div class="form-group mb-3">
			    <label for="id_member">ID Member</label>
			    <input type="text" class="form-control mt-2" id="id_member" name="id_member" value="<?php echo $id_member?>">
			  </div>
			 <div class="form-group mb-3">
			    <label for="nama_barang">ID Barang</label>
			    <input type="text" class="form-control mt-2" id="nama_barang" name="id_barang" value="<?php echo $id_box ?>">
			 </div>
			   <div class="form-group mb-3">
			    <label for="jumlah_barang">Jumlah Barang</label>
			    <input type="text" class="form-control mt-2" id="jumlah_barang" name="jumlah_barang" placeholder="Masukkan jumlah barang">
			  </div>
			  <div class="form-group mb-3">
			    <label for="harga_barang">Harga Barang</label>
			    <input type="text" class="form-control mt-2" id="harga_barang" name="harga_barang" value="<?php echo $harga ?>">
			  </div>
			  <div class="form-group mb-3">
			    <label for="total_harga">Total Harga</label>
			    <input type="text" class="form-control mt-2" id="total_harga" name="total_harga" placeholder="Masukkan harga total">
			 </div>
      		<div class="form-group mb-3">
    			<label for="alamat">Alamat</label>

    			<input type="text" class="form-control" id="alamat" rows="3"  name="alamat" value="<?php echo $alamat?>">
  				</div>
  				<div class="row">
  					<div class="col-9">
  						<input type="submit" name="beli" value="Pesan" class="btn shadow px-3 btn-primary ml-3">	
  					</div>
  					<div class="col">
			 			<a href="deskripsi_produk.php" class="btn btn-primary px-4 shadow mr-3">Kembali</a>
  					</div>
  				</div>
			  
		</form>
		<?php
			if(isset($_POST['beli'])){
				$id_member = $_POST['id_member'];
				$id_box = $_POST['id_barang'];
				$jumlah_barang = $_POST['jumlah_barang'];
				$harga = $_POST['harga_barang'];
				$total = $_POST['total_harga'];
				$alamat = $_POST['alamat'];
				$query_insert = "INSERT INTO transaksi(id_member, id_barang_box, jumlah_barang, total_harga, alamat) VALUES('".$id_member."', '".$id_box."', '".$jumlah_barang."', '".$total."', '".$alamat."')";
				$result_insert = $koneksi->query($query_insert);
				if($result_insert){
					echo "Insert success";
				}
				else{
					echo mysqli_error($koneksi);
				}

			}
		?>
		</div>
	</div>
</body>
</html>