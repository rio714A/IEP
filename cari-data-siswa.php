<?php
    include 'configuration.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Analytics IEP</title>
    <link rel="shortcut icon" type="image/png" href="icon/search.png" />
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
    table {
    border-collapse: collapse; 
    }

    td {
        padding: 5px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<body style="font-family: monospace;">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center>
	<font size="6"><b>CARI DATA SISWA </font></b><br>
	Cari Data Siswa berdasarkan Ketentuan dibawah<br><br><br><br>	
	<br>
	<form action="cari-data-siswa.php" method="POST">
		<table>
			<tr>
				<td>Cari Data Berdasarkan</td>
				<td>
					<select name="cari_data">
						<option value="No">No</option>
						<option value="`Nama Mahasiswa`">Nama Mahasiswa</option>
						<option value="`Asal Daerah`">Asal Daerah</option>
						<option value="`NIK`">NIK</option>
						<option value="`Nama Universitas`">Nama Universitas</option>
						<option value="`Nama Jurusan`">Nama Jurusan</option>
					</select>
				</td>
				<td><input type="text" name="put-cari" style="height: 20px;" placeholder="  Apa yang kamu cari?"></td>
				<td><input style="height:25px; width:120px" height="200" type="submit" value="Cari Data Siswa" name="pencarian-data" /></td>
			</tr>
		</table>
	</form>

	<br><br>

	<?php
		if(isset($_POST['pencarian-data'])){

	    	$get_value_cari = $_POST['put-cari'];
	    	$get_value_berdasarkan = $_POST['cari_data'];

	    	include 'list-request-search.php';
	    }
	?>

	<br><br><br>
    Copyright &copy; 2024 IEP(Indonesia Education Partnership). All right reserved.<br><br><br>
	<a href="index.php">[^] Ke Halaman Utama</a>&nbsp;&nbsp;<a href="list-database.php">[^] Lihat Seluruh Data</a>
	&nbsp;
	</body>
</html>
