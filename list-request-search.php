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
		$sql = "SELECT * FROM iep1 WHERE $get_value_berdasarkan LIKE '%$get_value_cari%'";
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
			echo "<a href='form-edit-pendaftar.php?id=".$siswa['NIK']."'>Edit</a> | ";
			echo "<a href='konfirmasi-hapus-data.php?id=".$siswa['NIK']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<br><br>
	<p>Total Data Hasil Pencarian Adalah: <b><?php echo mysqli_num_rows($query) ?> Siswa</b></p>