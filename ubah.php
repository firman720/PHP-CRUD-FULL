<?php
	include"config.php";
	$id     =  $_GET['id'];
	$sqlone = "SELECT * FROM siswa WHERE id='$id'";
	$runs   = mysql_query($sqlone);
	$data   = mysql_fetch_array($runs);
?>
<html>
<head>
	<title>CRUD</title>
</head>
<style type="text/css">
	.wraper{
		margin    :0 auto;
		border    : 1px solid #1e62d0;
		width     : 1270px;
		height    : auto;
		padding   : 10px;
		font-family: arial;
		
	}
	.sidebar-left{
		border    :1px solid #ccc;
		border-radius: 6px;
		width     : 300px;
		height    : auto;
		padding   : 10px;
		float: left;
		background-color: #f9f9f9;
	}
	.sidebar-rigth{
		border    :1px solid #ccc;
		border-radius: 6px;
		width     : 913px;
		height    : auto;
		padding   : 10px;
		float     : left;
		background-color: #f9f9f9;
		margin-left: 10px;
	}
	.title{
		border-left: 4px solid #1e62d0;
		width     : 1270px;
		height    : auto;
		padding   : 10px;
		font-family: arial;
		font-weight: bold; font-size: 25px;
		margin-bottom: 15px;
	}
	#title-id{
		margin-top: 3%;
		margin-bottom: 5px;
	}
	.form{
		padding: 20px;
	}
	.input{
		border :1px solid #ccc;
		border-radius: 5px;
		padding: 7px;
		width: 100%;
		margin-bottom: 10px;
	}
	.btn {
		width: 100%;
		box-shadow:inset 0px 1px 0px 0px #97c4fe;
		background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
		background-color:#3d94f6;
		border-radius:6px;
		border:1px solid #337fed;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		padding:9px 24px;
		text-decoration:none;
		text-shadow:0px 1px 0px #1570cd;
	}
	.btn:hover {
		background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
		background-color:#1e62d0;
	}
	.btn:active {
		position:relative;
		top:1px;
	}
	.table1 {
		margin-top:12px;
	    font-family: sans-serif;
	    color: #444;
	    border-collapse: collapse;
	    width: 100%;
	    border: 1px solid #f2f5f7;
	}

	.table1 tr th{
	    background: #1e62d0;
	    color: #fff;
	    font-weight: normal;
	}

	.table1, th, td {
	    padding: 8px 20px;
	    text-align: left;
	}

	.table1 tr:hover {
	    background-color: #f5f5f5;
	}

	.table1 tr:nth-child(even) {
	    background-color: #f2f2f2;
	}
	.aksi{
		padding:7px; border-radius:4px; color:#fff;
		font-size: 12px; text-decoration: none;
	}
	.red{
		background-color: red;
	}
	.green{
		background-color: green;
	}
</style>
<body>
	<div class="wraper" id="title-id">
		<div class="title">
			UBAH DATA SISWA 
		</div>
		<div class="sidebar-left">
			<form class="form" action="aksi.php" method="POST">
				<input type="hidden" value="<?=$data['id']?>" name="id">
				<input type="text"   name="nama"  value="<?=$data['nama']?>" placeholder="Nama Siswa" class="input" required><br>
				<input type="number" name="umur"  value="<?=$data['umur']?>" placeholder="Umur" class="input" required><br>
				<input type="number" name="kelas" value="<?=$data['kelas']?>" placeholder="Kelas" class="input" required><br>

				<input type="submit" name="ubah" value="UBAH DATA" class="btn">
			</form>
		</div>
		<div class="sidebar-rigth">
			<div style="padding:20px;">
				<span style="font-size:20px;">DATA SISWA</span>
				<table class="table1">
					<tr>
						<th width="5%">No</th>
						<th width="50%">Nama</th>
						<th width="10%">Usia</th>
						<th width="10%">Kelas</th>
						<th width="20%">Aksi</th>
					</tr>
					<?php
						$sql = "SELECT * FROM siswa";
						$run = mysql_query($sql);
						while ($siswa = mysql_fetch_array($run)) {
							$no++;
					?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $siswa['nama']; ?></td>
								<td><?php echo $siswa['umur']; ?></td>
								<td><?php echo $siswa['kelas']; ?></td>
								<td>
									<a href="" class="aksi green">Ubah</a>
									<a href="aksi.php?act=hapus&id=<?=$siswa['id']?>" class="aksi red">Hapus</a>
								</td>
							</tr>
					<?php }$no=0; ?>
				</table>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
</body>
</html>