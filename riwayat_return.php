<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Data Pengembalian</title>
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body class="bg-light" style = "background-image: url(assets/img/background2.jpg);">
 <div class="container-fluid p-5">
  <div class="container bg-white shadow rounded p-5">
   <table>
    <thead>
     <tr>
      <th>ID Member</th>
      <th>ID Pengembalian</th>
      <th>Nama Barang</th>
      <th>Jumlah Barang</th>
      <th>Total Harga</th>
      <th>Opsi</th>
     </tr>
    </thead>
    <tbody>
      <h2>Data Pengembalian</h2>
      <?php
       include "koneksi.php";
       $query = "SELECT * FROM riwayatpengembalian";
       $sql = $koneksi->query($query);
       while ($row = mysqli_fetch_array($sql))
       { ?>
        <form action="update.php" method="POST">
          <tr>
          <td><?php echo $row['id_member']?></td>
         <td><?php echo $row['id_pengembalian']?></td>
          <input type="hidden" name="id_pengembalian" value="<?php echo $row['id_pengembalian']?>">
         <td><?php echo $row['nama_barang']?></td>
         <td class="col-sm-2"><input type="number" name="jumlah_barang" class="form-control" value="<?php echo $row['jumlah_barang']?>"></td>
         <td><?php echo $row['total_harga']?></td>
          <td> 
          <button type="submit" class="btn btn-primary ml-5 text-white">Update</button> 
          <a href="Hapus.php?Hapus=<?php echo $row['id_pengembalian'];?>" class="btn btn-warning">Delete</a> 
         </td> 
        </tr> 
        </form>
        
      
        

        <?php 
       } 
      ?>
    </tbody>
   </table>
   
  </div>
 </div>

</body>
</html>