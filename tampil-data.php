<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>fikanurfatiha</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Produk-Fika</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
			  <li class="nav-item">
		        <a class="nav-link" href="input.php">Input</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Keluar</a>
		      </li>
		  	</ul>
		  </div>
		</nav>
				
				<table class="table table-striped table-bordered">
					<tr bgcolor="#dedede">
						<th>No</th>
						<th>Nama Produk</th>
						<th>Keterangan</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Opsi</th>
					</tr>

					<?php
					$query = mysqli_query($db, "SELECT * FROM produk");
					$no = 1;
					while ($data = mysqli_fetch_assoc($query)) {
						?>
						<tr>
							<td><?php echo $no++?></td>
							<td><?php echo $data['nama_produk']; ?></td>
							<td><?php echo $data['keterangan']; ?></td>
							<td><?php echo $data['harga']; ?></td>
							<td><?php echo $data['jumlah']; ?></td>
							<td>
								<a title="Update" href="edit.php?nama_produk=<?=$data['nama_produk']?>">Update </a>|
								<a title="Delete" href="hapus.php?nama_produk=<?=$data['nama_produk']?>" onclick = "return confirm('Anda yakin ingin menghapus produk <?php echo $data['nama_produk']?> pada tabel?');"> Hapus</a>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
			
</body>
</html>