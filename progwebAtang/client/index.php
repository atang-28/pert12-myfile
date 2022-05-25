<?php
if(isset($_GET["p"])){
	if($_GET["p"] === "mhs"){
		if(isset($_GET["sp"])){
			if(isset($_GET["sp"] == "addnew")){
				$pg="pagemhsadd.php";
				$TPage = "Menambahkan data Mahasiswa";
			}
			if ($_GET["sp"] == "edit") {
				$pg="";
				$TPage="Edit Data Mahasiswa";
			}
			if ($_GET["sp"] == "dele") {
				$pg="";
				$TPage="Hapus Data Mahasiswa";
			}
			else{
				$pg="pagemhslist.php";
				$TPage="List Data Mahasiswa";
			}
		}
	}
}
?>
