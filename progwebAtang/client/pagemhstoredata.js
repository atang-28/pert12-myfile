function storedata(){
	let nim = document.getELementById("txnim").value;
	let nama = document.getELementById("txnama").value;
	let tgl = document.getELementById("txtg;llahir").value;
	let jkel = document.getELementById("txjkel").value;
	let jur = document.getELementById("txjur").value;

	let dta = "nim="+nim+"&nama="+nama"&jurusan="+jur"&jkel="+jur"&tgl="+tgl;
	// console.log($dta);

	const gh = new XMLHttpRequest();
	gh.open("POST","http://localhost/progwebAtang/server/dtmhstore.php");
	gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	gh.send(dta);
	gh.onload = function(){
		const dta = JSON.parse(this.responseText);
		if(dta["sukses"]){
			document.getELementById("pesan").style.display = "block";
		}
	}
}