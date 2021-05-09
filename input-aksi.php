<?php

require_once("koneksi.php");

if($_POST['Simpan'] == "Simpan"){
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];

	$ver = mysqli_num_rows(mysqli_query($db, "SELECT nama_produk FROM produk WHERE nama_produk ='$_POST[nama_produk]'"));

	if($ver > 0){
		?>
		<script type="text/javascript">
			alert("Maaf nama produk yang anda masukkan sudah ada");
			document.location = "input.php";
		</script>
		<?php
	}

	else{
		$insert = mysqli_query($db, "INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk', '$keterangan', '$harga', '$jumlah')");
			?>
		<script type="text/javascript">
			alert("Input data Berhasil");
			document.location='tampil-data.php';
		</script>
		<?php
	}
	
}
?>