<!DOCTYPE html>
<html>

<head>
	<title>Surat Keterangan</title>
	<style>
		p {
			font-size: 12pt
		}

		.mt-05 {
			margin-top: 0.5cm;
		}

		.mt-1 {
			margin-top: 1cm;
		}

		.mt-2 {
			margin-top: 2cm;
		}

		.mt-5 {
			margin-top: 5cm;
		}

		.container {
			margin-left: 0.5cm;
			margin-top: 0cm;
			margin-right: 0.5cm;
			margin-bottom: 1.5cm;
		}

		td {
			vertical-align: top;
		}

		.point {
			width: 1cm;
		}

		.justify {
			text-align: justify;
		}

		.page_break {
			page-break-before: always;
		}

		.text {
			font-size: 11pt;
			line-height: 25px;
		}
	</style>
</head>

<body>

	<div class="container">
		<center>
			<table style="margin-left: 1.2cm">
				<tr>
					<td>
						<img src="<?php echo base_url() ?>assets/template/images/logo-dishub.png" alt="" style="width:2.5cm;">
					</td>
					<td>
						<center style="margin-top: -10px; padding-left:10%; text-align: center; width:100%">
							<p style="font-size: 14pt">
								DINAS PERHUBUNGAN KOTA MADIUN <br>

							</p>
							<p style="font-size: 10pt; margin-top: -15px">Jl. Hayam Wuruk No.62, Manguharjo
							</p>
							<p style="font-size: 10pt; margin-top: -10px">

							</p>
						</center>
					</td>
				</tr>
			</table>
			<hr>
		</center>
		<br />

		<center>
			<u>
				<p style="font-size: 14pt; margin-top: -20px">
					<b>PENGADUAN LLAJ KOTA MADIUN</b>
				</p>
			</u>
			<!-- <p style="margin-top: -20px">
				Nomor : <?= $pengajuan->no_tiket ?>
			</p> -->
		</center>
		<center>
			<table style="width:100%; margin-top: -10px;">
				<tbody>
					<tr>
						<td style="width: 30px;"><b></b></td>
						<td colspan="2">Detail Pengaduan </td>
						<td style="width: 7px">:</td>
					</tr>
					<tr>
						<td style="width: 15px;"></td>
						<td colspan="2"></td>
						<td style="width: 7px"></td>
					</tr>
					<tr>
						<td style="width: 15px"></td>
						<td style="width: 15px;"><b>1. </b></td>
						<td style="width: 250px">No Tiket</td>
						<td style="width: 7px">:</td>
						<td><?= $pengajuan->no_tiket ?></td>
					</tr>

					<tr>
						<td style="width: 15px;"></td>
						<td style="width: 15px;"><b>2.</b></td>
						<td style="width: 200px">Nama</td>
						<td style="width: 7px">:</td>
						<td><?= $pengajuan->nama_pengirim ?></td>
					</tr>
					<tr>
						<td style="width: 15px;"></td>
						<td style="width: 15px;"><b>3.</b></td>
						<td style="width: 200px">Tanggal Pengaduan</td>
						<td style="width: 7px">:</td>
						<td><?= $pengajuan->tgl_pengaduan ?></td>
					</tr>
					<tr>
						<td style="width: 15px;"></td>
						<td style="width: 15px;"><b>4.</b></td>
						<td style="width: 200px">No Telp</td>
						<td style="width: 7px">:</td>
						<td><?= $pengajuan->no_telp ?></td>
					</tr>
					<tr>
						<td style="width: 15px;"></td>
						<td style="width: 15px;"><b>5.</b></td>
						<td style="width: 200px">Detail Lokasi</td>
						<td style="width: 7px">:</td>
						<td><?= $pengajuan->lokasi ?></td>
					</tr>
					<tr>
						<td style="width: 15px;"></td>
						<td style="width: 15px;"><b>6.</b></td>
						<td style="width: 200px">Detail Pengaduan</td>
						<td style="width: 7px">:</td>
						<td><?= $pengajuan->isi ?></td>
					</tr>
					<tr>
						<td style="width: 15px;"></td>
						<td style="width: 15px;"><b>7.</b></td>
						<td style="width: 200px">Bukti Pengaduan</td>
						<td style="width: 7px">:</td>
						<td> <img src="<?php echo base_url() . './lampiran/' . $pengajuan->bukti ?> " height="300" width="270"></td>
					</tr>

				</tbody>
			</table>
		</center>

	</div>

</body>

</html>