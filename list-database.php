<?php
    include 'configuration.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Analyst Siswa</title>
    <link rel="shortcut icon" type="image/png" href="icon/list-data.png" />
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
	<br><br><br><br><br><br><br><br><br><br>
	<center>
	<font size="6"><b>LIST DATA PENDAFTAR BARU</font></b><br>
	Data siswa ini adalah data lengkap dari siswa baru yang akan mendaftar ke sekolah.<br><br><br><br>	
	
	<table border="1">
		<tr>
			<th width="29" align="center">No</th>
			<th align="left" width="250">Nama Mahasiswa</th>
			<th align="left" width="250">Asal Daerah</th>
			<th align="left" width="150">NIK</th>
			<th align="left" width="150">Nama Universitas</th>
			<th align="left" width="250">Nama Jurusan</th>
			<th align="center">Tindakan</th>
		</tr>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM iep1 ORDER BY Nama Mahasiswa ASC";
		$query = mysqli_query($db, $sql);
		$number = 1;
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			// echo "<td align='center'>".$siswa['id']."</td>";
			echo "<td align='center'>".$number++."</td>";
			echo "<td>".$siswa['Nama Mahasiswa']."</td>";
			echo "<td>".$siswa['Asal Daerah']."</td>";
			echo "<td>".$siswa['NIK']."</td>";
			echo "<td>".$siswa['Nama Universitas']."</td>";
			echo "<td>".$siswa['Nama Jurusan']."</td>";
			
            echo "<td>";
			echo "<a href='form-edit-pendaftar.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='konfirmasi-hapus-data.php?id=".$siswa['id']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<br><br>
	<p>Total Pendaftar Masuk: <b><?php echo mysqli_num_rows($query) ?> Siswa</b></p>
	<br><br><br>
    Copyright &copy; 2024 IEP(Indonesia Education Partnership). All right reserved.<br><br><br>
	<a href="index.php">[^] Ke Halaman Utama</a>&nbsp;&nbsp;<a href="form-pendaftaran.php">[^] Tambahkan Data Lagi</a>&nbsp;&nbsp;<a href="cari-data-siswa.php">[^] Cari Data dengan Berdasasrkan</a>
	&nbsp;
	</body>
</html>
