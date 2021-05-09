<?php

require_once("koneksi.php");

if (isset($_GET['nama_produk'])){
	$nama_produk = $_GET['nama_produk'];
}else{
	die("Error!!");
}

$query = mysqli_query($db, "SELECT * FROM produk WHERE nama_produk = '$nama_produk'");
$data = mysqli_fetch_array($query);
$data_np = $data['nama_produk'];

if($_POST['Simpan'] == "Simpan"){
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];

	$validasi = mysqli_num_rows(mysqli_query($db, "SELECT nama_produk FROM produk WHERE nama_produk = '$_POST[nama_produk]' and nama_produk != '$data_np'"));

	if($validasi > 0){
		?>
		<script type="text/javascript">
			alert("Maaf produk sudah ada");
			document.location='edit.php?nama_produk=<?=$data['nama_produk']?>';
		</script>
		<?php
	}
	else{
		$update = mysqli_query($db, "UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah'");
		?>
		<script type="text/javascript">
			alert("Selamat produk berhasil diperbarui");
			document.location = 'tampil-data.php';
		</script>
		<?php
	}

}