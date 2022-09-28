<html lang="en">
<head>
  <title>CRUD MAHASISWA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php 
	include "koneksi.php";


	$id_prodi = $_POST['id_prodi'];
	$nama = $_POST['nama_mhs'];
	$alamat = $_POST['alamat_mhs'];

	$sql = "INSERT INTO tbl_ms VALUES('','$id_prodi','$nama','$alamat')";
	$hasil = mysqli_query($conn,$sql);
	if (!$hasil) { ?>
		<div class="alert alert-danger">
    		<strong>Gagal Menambah Data!</strong>
  		</div>
	<?php } else { ?>
		<div class="alert alert-success">
    		<strong>Success Menambah Data!</strong> Show Data <a href="output6.php" class="alert-link">Klik</a>.
  		</div>
	<?php }

 ?>

</html>