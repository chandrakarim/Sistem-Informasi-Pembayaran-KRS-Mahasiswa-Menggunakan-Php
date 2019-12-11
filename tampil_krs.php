<?php
$data_jurusan = array(
	561 => 'Sistem Informasi',
	541 => 'Teknik Informatika',
	331 => 'Teknik Komputer',
	321 => 'Manajemen Informatika',
	311 => 'Komputerisasi Akuntansi'
);
if (isset($_POST['nama'])) {
	$jumlah_sks = 0;
	$total_biaya = 0;
	$jurusan = $data_jurusan[substr($_POST['nim'], 2, 3)];
	$angkatan = 20 . substr($_POST['nim'], 0, 2);
	foreach ($_POST['makul'] as $kode => $makul) {
		if (isset($_POST['makul'][$kode]['nama'])) {
			$jumlah_sks += $_POST['makul'][$kode]['sks'];
			$total_biaya += $_POST['makul'][$kode]['sks'] * $_POST['makul'][$kode]['harga'];
		} else {
			unset($_POST['makul'][$kode]);
		}
	}

	if ($jumlah_sks > 24) {
		echo "<h2>Jumlah SKS yang diambil melebihi jumlah maximum</h2>";
		die();
	}
}

?>
<h2>KRS Mahasiswa - <?php echo date('d/m/Y') ?></h2>
Nama : <?php echo $_POST['nama'] ?> <br>
NIM : <?php echo $_POST['nim'] ?> <br>
Jurusan : <?php echo $jurusan ?> <br>
Angkatan : <?php echo $angkatan ?> <br><br>


<h2>Matakuliah yang diambil</h2>
<table border="1">
	<thead>
		<tr>
			<th>Kode</th>
			<th>Nama Matakuliah</th>
			<th>SKS</th>
			<th>Biaya</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($_POST['makul'] as $kode => $makul): ?>
		<tr>
			<td><?php echo $kode ?></td>
			<td><?php echo $_POST['makul'][$kode]['nama'] ?></td>
			<td><?php echo $_POST['makul'][$kode]['sks'] ?></td>
			<td>Rp. <?php echo number_format($_POST['makul'][$kode]['sks'] * $_POST['makul'][$kode]['harga'], 2, ',', '.') ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<br>
Jumlah matakuliah yang diambil : <?php echo count($_POST['makul']) ?> <br>
Jumlah sks yang diambil : <?php echo $jumlah_sks ?> <br><br>

<h2>Pembayaran</h2>
Total bayar SPP Variabel : Rp. <?php echo number_format($total_biaya, 2, ',', '.') ?>