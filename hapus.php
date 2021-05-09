<?php
require_once "koneksi.php";
 
if(isset($_GET['nama_produk'])){
	$nama = $_GET['nama_produk'];


	if ($nama){
		mysqli_query($db, "DELETE FROM produk WHERE nama_produk = '$nama'");
		?>
		<script type="text/javascript">
			alert("Selamat data berhasil dihapus");
			document.location='tampil-data.php';
		</script>
		<?php
	}
}

?>
