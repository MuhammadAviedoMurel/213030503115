<!DOCTYPE html>
<html>
<head>
    <meta charset="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Program Tugas Praktikum Modul I</title>
</head>
<body>
	<form method="post">
		<label for="nama">Masukkan nama-nama anggota keluarga:</label>
		<input type="text" name="nama" id="nama">
		<br><br>
		<button type="submit" name="submit">Proses</button>
	</form>
	<br><br>
	<?php
		if (isset($_POST["submit"])) {
			$nama = $_POST["nama"];
			$namaArr = explode(" ", $nama);
			$jumlahKata = count($namaArr);
			$jumlahHuruf = strlen(str_replace(" ", "", $nama));
			$kebalikan = strrev($nama);
			$jumlahKonsonan = 0;
			$jumlahVokal = 0;
			for ($i = 0; $i < strlen($nama); $i++) {
				$karakter = strtolower($nama[$i]);
				if (preg_match('/[aeiou]/', $karakter)) {
					$jumlahVokal++;
				} else if (preg_match('/[a-z]/', $karakter)) {
					$jumlahKonsonan++;
				}
			}
			echo "Jumlah kata: " . $jumlahKata . "<br>";
			echo "Jumlah huruf: " . $jumlahHuruf . "<br>";
			echo "Kebalikan nama: " . $kebalikan . "<br>";
			echo "Jumlah konsonan: " . $jumlahKonsonan . "<br>";
			echo "Jumlah vokal: " . $jumlahVokal . "<br>";
		}
	?>
</body>
</html>