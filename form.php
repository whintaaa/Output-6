<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORM TAMBAH DATA MAHASISWA</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
	<h1>Tambah Data Mahasiswa</h1>
	<form action="action.php" method="POST">
	<div class="mb-3 mt-3">
		<label for="id" class="form-label">Id Prodi:</label>
		<input type="number" class="form-control" placeholder="Masukan Id Prodi" name="id_prodi">
	</div>
	<div class="mb-3">
		<label for="nama" class="form-label">Nama Mahasiswa:</label>
		<input type="text" class="form-control" placeholder="Masukan Name" name="nama_mhs">
	</div>
	<div class="mb-3">
		<label for="alamat" class="form-label">Alamat Mahasiswa:</label>
		<input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat_mhs">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	
</body>
</html>