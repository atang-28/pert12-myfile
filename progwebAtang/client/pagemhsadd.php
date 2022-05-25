<!DOCTYPE html>
<html>
<head>
	<title>[TPage]</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body>

<div class="container">
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Navbar</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Features</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Data Dosen</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<h3>Tambah Data Mahasiswa</h3>

		<form>
			<div class="mb-3">
				<label class="form-label">NIM</label>
				<input type="text" class="form-control" id="txnim" placeholder="isikan NIM">
			</div>
			<div class="mb-3">
				<label class="form-label">Nama Mahasiswa</label>
				<input type="text" class="form-control" id="txnama" placeholder="Isikan Nama Lengkap">
			</div>
			<div class="mb-3">
				<label class="form-label">Tgl Lahir</label>
				<input type="text" class="form-control" id="txtgl" placeholder="Isikan Tanggal Lahir">
			</div>
			<div class="mb-3">
				<label class="form-label ">Jenis Kelamin</label>
				<select name="txjkel">
					<option value="L">Laki-Laki</option>
					<option value="P">Prempuan</option>
				</select>
			</div>
			<div class="mb-3">
				<label class="form-label">Jurusan</label>
				<select name="txjur">
					<option value="MTI">TI-MTI</option>
					<option value="SK">Sistem Komputer</option>
					<option value="KAB">TI-KAB</option>
				</select>
			</div>
			<div class="mb-3">
				<label class="form-label"></label>
				<button type="button" onclick="storedata()" class="btn btn-success">Simpan data</button>
				<button type="button" onclick="ngakjadi()" class="btn btn-danger">Batal</button>
			</div>
		</form>
	<script>
		function ngakjadi(){
			location.replace("http://localhost/progwebAtang/client/index.php?p=mhs")
		}
	</script>
	<script src="pagemhstoredata.js"></script>
	</div>
</div>

</body>
</html>