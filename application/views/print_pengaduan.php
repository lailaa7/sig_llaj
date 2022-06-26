<!DOCTYPE html>
<html>

<head>
	<title>Pengajuan</title>
</head>

<body>
	<style>
		p {
			font-size: 12pt
		}

		table,
		td,
		th {
			border: 1px solid #474747;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			padding: 6px;
		}
	</style>
	<div>
		<strong>
			<p style="text-align: center; margin-bottom:25px; font-size: 14pt">Pengajuan LLAJ Kota Madiun</p>
		</strong>
		<?= $pengajuan->no_tiket ?>
		<?= $pengajuan->nama_pengirim ?>
	</div>

</body>

</html>