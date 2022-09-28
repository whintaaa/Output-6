<?php
$koneksi = mysqli_connect("localhost","root","","db_mhs");
$sql="SELECT id_mhs,nama_mhs,nama_prodi,alamat_mhs 
FROM tbl_ms m, tbl_prodi p 
WHERE m.id_prodi=p.id_prodi";

$hasil=mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD MAHASISWA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA MAHASISWA TEKNIK UTM</h2>
  <p>Berikut data mahasiswa fakultas teknik di universitas trunojoyo madura : </p>
  <a href="form.php"><button type="button" class="btn btn-success">Tambah Data</button></a>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
        $no = 1;  
    		while ($baris=mysqli_fetch_assoc($hasil)) {
    		
    	?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $baris['nama_mhs']; ?></td>
        <td><?php echo $baris['nama_prodi']; ?></td>
        <td><?php echo $baris['alamat_mhs']; ?></td>
        <td>
          <button type="button" class="btn btn-success">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
		<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
