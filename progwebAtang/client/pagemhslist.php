<div class="konten">
<script>
	const gh = new XMLHttpRequest();
	gh.open("GET","http://localhost/progwebAtang/server/dtmhs.php");
	gh.send();

	gh.onload = function{
		const dta = JSON.parse(this.responseText);
		var tx = '<h3> List data Mahsiswa</h3>';

	tx += '<table class="table table-hover">'
	tx += '	<thead>'
	tx += '		<tr>'
	tx += '			<th scope="col">#</th>'
	tx += '			<th scope="col">NIM</th>'
	tx += '			<th scope="col">Nama Lengkap</th>'
	tx += '			<th scope="col">Jenis Kelamin</th>'
	tx += '			<th scope="col">Jurusan</th>'
	tx += '			<th scope="col">Tgl Lahir</th>'
	tx += '			<th scope="col"><a href="index.php?p=mhs&sp=addnew" class="badge bg-primary">Baru</a></th>'
	tx += '		</tr>'
	tx += '	</thead>'

	tx += '	<tbody>'
		for(i=0;i<dta.length;i++){
			let jkel = "Laki-Laki";
			if(dta[i][3] == "P"){
				jkel = "Prempuan"
			}
	tx += '		<tr>'
	tx += '			<th scope="row">1</th>'
	tx += '			<td>'+dta[i][0]+'</td>'
	tx += '			<td>'+dta[i][1]+'</td>'
	tx += '			<td>'+dta[i][3]+'</td>'
	tx += '			<td>'+dta[i][2]+'</td>'
	tx += '			<td>'+dta[i][4]+'</td>'
	tx += '			<td><a href="index.php?p=mhs&sp=edit&nim=" class="badge bg-warning">edit</a> | <a href="index.php?p=mhs&sp=dele&nim=" class="badge bg-danger">Hapus</a></td>'
	tx += '		</tr>'
		}
	tx += '	</tbody>'
	tx += '</table>'
	document.getElementById("konten").innerHTML = tx;
}

</script>
</div>