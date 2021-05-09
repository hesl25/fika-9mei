<?php

if (isset($_GET['nama_produk'])){
	$nama_produk = $_GET['nama_produk'];
}else{
	die("Maaf terjadi error");
}
require_once("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM produk WHERE nama_produk = '$nama_produk'");
$data = mysqli_fetch_array($query);
?>

<html>
<head>
	<title>Tambah Produk</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
		<div class="jumbotron jumbotron-fluid">
		  	<div class="container">
				<h3>Update Data Produk</h3>
				<br/>
				<a href="tampil-data.php">KEMBALI</a>
				<br/>
				<br/>
				<form method="post" action="edit-aksi.php?nama_produk=<?=$data['nama_produk']?>">
		
		  		<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Produk</label>
					<div class="col-sm-10">
						<input type="text" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk']?>" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<input type="text" name="keterangan" class="form-control" value="<?php echo $data['keterangan']?>" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Harga</label>
					<div class="col-sm-10">
						<input type="text" name="harga" class="form-control" value="<?php echo $data['harga']?>" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-10">
						<input type="text" name="jumlah" class="form-control" value="<?php echo $data['jumlah']?>" required>
					</div>
				</div>
				<input name="Simpan" type="submit" value="Simpan" >
			</div>
		</div>
	</form>
</body>
</html>