<!DOCTYPE html>
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
				<h3>Input Data Produk</h3>
				<br/>
				<a href="tampil-data.php">KEMBALI</a>
				<br/>
				<br/>
				<form method="post" action="input-aksi.php">
		
		  		<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Produk</label>
					<div class="col-sm-10">
						<input type="text" name="nama_produk" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<input type="text" name="keterangan" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Harga</label>
					<div class="col-sm-10">
						<input type="text" name="harga" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-10">
						<input type="text" name="jumlah" class="form-control" required>
					</div>
				</div>
				<input name="Simpan" type="submit" value="Simpan">
			</div>
		</div>
	</form>
</body>
</html>