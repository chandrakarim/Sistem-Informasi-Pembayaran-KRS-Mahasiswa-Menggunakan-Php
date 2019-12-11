<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsi 2018</title>
</head>
<body>
	<h1>KRS MAHASISWA</h1>
	<form action="tampil_krs.php" method="post">
		Nama : <input type="text" name="nama"> <br><br>
		NIM &nbsp; : <input type="text" name="nim"> <br><br>

		<table border="1">
			<thead>
				<tr>
<th>Kode</th>
<th>Nama Matakuliah</th>
					<th>SKS</th>
					<th>Pilih</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>TI001</td>
					<td>Algoritma dan Pemrograman</td>
					<td>3</td>
					<td>
						<input type="checkbox" name="makul[TI001][nama]" value="Algoritma dan Pemrograman">
						<input type="hidden" name="makul[TI001][harga]" value="65000">
						<input type="hidden" name="makul[TI001][sks]" value="3">
					</td>
				</tr>
				<tr>
					<td>TI002</td>
					<td>Pemrograman Desktop</td>
					<td>3</td>
					<td>
						<input type="checkbox" name="makul[TI002][nama]" value="Pemrograman Desktop">
						<input type="hidden" name="makul[TI002][harga]" value="65000">
						<input type="hidden" name="makul[TI002][sks]" value="3">
					</td>
				</tr>
				<tr>
					<td>TI003</td>
					<td>Pengantar Mobile</td>
					<td>2</td>
					<td>
						<input type="checkbox" name="makul[TI003][nama]" value="Pengantar Mobile">
						<input type="hidden" name="makul[TI003][harga]" value="65000">
						<input type="hidden" name="makul[TI003][sks]" value="2">
					</td>
				</tr>
				<tr>
					<td>TI004</td>
					<td>Pancasila</td>
					<td>2</td>
					<td>
						<input type="checkbox" name="makul[TI004][nama]" value="Pancasila">
						<input type="hidden" name="makul[TI004][harga]" value="65000">
						<input type="hidden" name="makul[TI004][sks]" value="2">
					</td>
				</tr>
				<tr>
					<td>TI005</td>
					<td>Kecerdasan Buatan</td>
					<td>3</td>
					<td>
						<input type="checkbox" name="makul[TI005][nama]" value="Kecerdasan Buatan">
						<input type="hidden" name="makul[TI005][harga]" value="65000">
						<input type="hidden" name="makul[TI005][sks]" value="3">
					</td>
				</tr>
				<tr>
					<td>TI006</td>
					<td>Matematika Informatika</td>
					<td>3</td>
					<td>
						<input type="checkbox" name="makul[TI006][nama]" value="Matematika Informatika">
						<input type="hidden" name="makul[TI006][harga]" value="65000">
						<input type="hidden" name="makul[TI006][sks]" value="3">
					</td>
				</tr>
				<tr>
					<td>TI007</td>
					<td>Bahasa Inggris</td>
					<td>2</td>
					<td>
						<input type="checkbox" name="makul[TI007][nama]" value="Bahasa Inggris">
						<input type="hidden" name="makul[TI007][harga]" value="65000">
						<input type="hidden" name="makul[TI007][sks]" value="2">
					</td>
				</tr>
				<tr>
					<td>TI008</td>
					<td>Praktikum Pengembangan Web</td>
					<td>3</td>
					<td>
						<input type="checkbox" name="makul[TI008][nama]" value="Pemrograman Web">
						<input type="hidden" name="makul[TI008][harga]" value="80000">
						<input type="hidden" name="makul[TI008][sks]" value="3">
					</td>
				</tr>
				<tr>
					<td>TI009</td>
					<td>Praktikum Statistika</td>
					<td>1</td>
					<td>
						<input type="checkbox" name="makul[TI009][nama]" value="Praktikum Statistika">
						<input type="hidden" name="makul[TI009][harga]" value="80000">
						<input type="hidden" name="makul[TI009][sks]" value="1">
					</td>
				</tr>
				<tr>
					<td>TI010</td>
					<td>Skripsi</td>
					<td>6</td>
					<td>
						<input type="checkbox" name="makul[TI010][nama]" value="Skripsi">
						<input type="hidden" name="makul[TI010][harga]" value="65000">
						<input type="hidden" name="makul[TI010][sks]" value="6">
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<button type="submit">Kirim</button>
		<button type="reset">Setel Ulang</button>
	</form>
</body>
</html>