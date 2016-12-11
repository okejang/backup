<html>
<head>
<style type="text/css" media="print">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	table tr td { padding: 7px 5px; font-size: 10px; border:1px solid black;}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color:white;
		border:1px solid black;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	table tr td { padding: 7px 5px; font-size: 10px; border:1px solid black;}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color: #999;
		padding: 8px 0;
		border:1px solid black;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Print Data</title>
</head>

<body onload="window.print()">
	<center><b style="font-size: 20px">BUKU CATATAN PENILAIAN PERILAKU PNS</b><br>
	</center><br>
	
	<table>
		<thead>
			<tr>
				<th width="3%">No</td>
				<th>Tanggal</td>
				<th>Uraian</td>
				<th>Nama/NIP dan Paraf<b>Pejabat Penilai</b></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
			</tr>
			<?php 
			if (!empty($data)) {
				$no = 0;
				foreach ($data as $row) {
					$no++;
			?>
			<tr>
				<td>1</td>
				<td>Januari<b>Desember <?php $tahunx = date(Y);?></b></td>
				<td>Penilaian SKP sampai dengan akhir Desember <?php $tahunx = date(Y);?> = 
					<b>80</b> sedangkan penilaian perilaku kerjanya adalah 
					<b>sebagai berikut : </b>
					<?php echo $no;?>. <?php echo $row['faktor_nilai'];?>
				</td>
				<td>
					..........
				</td>
			</tr>
			<?php 
				}
			} else {
				echo "<tr><td style='text-align: center'>Tidak ada data</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>

