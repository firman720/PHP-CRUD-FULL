<?php
	include"config.php";
	if(isset($_POST['tambah'])){
		$nama  = $_POST['nama'];
		$umur  = $_POST['umur'];
		$kelas = $_POST['kelas'];

		$sql   = "INSERT INTO siswa VALUES('','$nama','$umur','$kelas')";
		$run   = mysql_query($sql);
		if($run){
			header('location: index.php');
		}else{
			echo "Gagal insert data!";
		}
		//tambah data
	}elseif(isset($_POST['ubah'])){
		$nama  = $_POST['nama'];
		$umur  = $_POST['umur'];
		$kelas = $_POST['kelas'];
		$id    = $_POST['id'];

		$sql   = "UPDATE siswa SET nama='$nama', umur='$umur', kelas='$kelas' WHERE id='$id'";
		$run   = mysql_query($sql);
		if($run){
			header('location: index.php');
		}else{
			echo "Gagal di ubah...";
		}
	}

	

	if($_GET['act']=='hapus'){
		$id = $_GET['id'];

		$sql = "DELETE FROM siswa WHERE id='$id'";
		$run = mysql_query($sql);
		if($run){
			header('location: index.php');
		}else{
			echo "Gagal dihapus!";
		}

	}
?>