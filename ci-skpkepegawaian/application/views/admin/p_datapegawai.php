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
		background-color:lightgrey;
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
	<center><b style="font-size: 20px">REKAPITULASI DATA PEGAWAI</b><br>
	</center><br>
	
	<table>
		<thead>
			<tr>
				<th width="3%">No</td>
				<th width="5%">Foto</td>
				<th>Nama</td>
				<th>NIP</td>
				<th>Jabatan</td>
				<th>Unit Kerja</td>
				<th>No HP</td>
				<th>Email</td>
				<th>Alamat</td>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (!empty($data)) {
				$no = 0;
				foreach ($data as $row) {
					$no++;
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td align="center">
				<?php 
				if($row['foto'] == "notavailable.png"){ ?>
					<img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $row['foto']?>" width="80px">
				<?php }else{ ?>
				<img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $row['foto']?>" width="80px"></td>
				<?php } ?>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['nip'];?></td>
				<td><?php echo $row['jabatan'];?></td>
				<td><?php echo $row['unitkerja'];?></td>
				<td><?php echo $row['nohp'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['alamat'];?></td>
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

