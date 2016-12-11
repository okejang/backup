<style type="text/css" media="print">
    table {border: solid 1px #000; border-collapse: collapse; width: 100%}
    table tr td { padding: 7px 5px; font-size: 10px; border:1px solid black;}
    th {
        font-family:Arial;
        color:black;
        font-size: 11px;
        background-color:yellow;
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
    p{
        font-family:Arial;
        color:black;
        font-size: 11px;
    }

    #ket{margin-bottom: 5px;}
    #ket table tr td { padding: 2px; font-size: 10px; border:0px;}
</style>
<style type="text/css" media="screen">
    table {border: solid 1px #000; border-collapse: collapse; width: 100%}
    table tr td { padding: 7px 5px; font-size: 10px; border:1px solid black;}
    th{
        font-family:Arial;
        color:black;
        font-size: 11px;
        background-color: yellow;
        padding: 8px 0;
        border:1px solid black;
    }
    td { padding: 7px 5px;font-size: 10px}
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }

    #ket{margin-bottom: 5px;}
    #ket table tr td { padding: 2px; font-size: 10px; border:0px;}
</style>
<title>Kontrak Kerja Pegawai</title>
</head>

<body onload="window.print()">
<div id="content">
<div id="header" style="margin-bottom:30px; text-align:center;">
<h3>FORMULIR SASARAN KERJA <br/> PEGAWAI NEGERI SIPIL</h3>
</div>
    <table>
        <thead>
		<?php foreach ($pejabatpenilai as $row) { ?>
    		<tr><td style="font-weight:bold; text-align:center">No</td><td colspan="2" style="font-weight:bold;">PEJABAT PENILAI</td><td style="font-weight:bold; text-align:center">No</td><td colspan="4"><b>II. PEGAWAI NEGERI SIPIL YANG DINILAI</b></td></tr>
        	<tr><td style="text-align:center">1<br/><br/>2<br/><br/>3<br/><br/>4<br/><br/>5</td>
			<td><p>Nama</br><br/>NIP</a></br></br>Pangkat/Gol.Ruang<br/><br/>Jabatan<br/><br>Unit Kerja</p></td>
			<td><?php echo $row['nama']?><br/><br/><?php echo $row['nip'] ?><br/><br/><?php echo $row['jabatan']?><br/><br/><?php echo $row['unitkerja']?><br/><br/><?php echo "IAIN Bengkulu" ?></td>
			<td style="text-align:center">1<br/><br/>2<br/><br/>3<br/><br/>4<br/><br/>5</td>
			<?php } ?>
			<td colspan="2"><p>Nama</br><br/>NIP</a></br></br>Pangkat/Gol.Ruang<br/></br>Jabatan<br/><br>Unit Kerja</p></td>
			<?php foreach ($datapegawai as $row) { ?>
			<td colspan="3"><?php echo $row['nama']?><br/><br/><?php echo $row['nip'] ?><br/><br/><?php echo $row['jabatan']?><br/><br/><?php echo $row['unitkerja']?><br/><br/><?php echo "IAIN Bengkulu" ?></td></tr>
			<?php } ?>
            <tr>
                <td align="center" rowspan="2">No</td>
                <td align="center" colspan="2" rowspan="2">Kegiatan Tugas Pegawai</td>
                <td align="center" rowspan="2">AK</td>
                <td colspan="4" style="text-align:center; font-weight:bold;">TARGET</td>
            </tr>
			<tr>
				<td align="center">Kuant / Output</td>
                <td align="center">Kual / Mutu</td>
                <td align="center">Waktu</td>
                <td align="center" width="150px">Biaya</td>
			</tr>
                <tr>
                <th>1</th>
                <th colspan="2">2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
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
                <td colspan="2"><?php echo $row['kegiatan_tugas'];?></td>
                <td><?php echo $row['AK'];?></td>
                <td><?php echo $row['kuant_output'];?></td>
                <td><?php echo $row['kual_mutu'];?></td>
                <td><?php echo $row['masa_waktu'];?></td>
                <td><?php echo $row['biaya'];?></td>
            </tr>
            <?php 
                }
            } else {
                echo "<tr><td style='text-align: center'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <div id="ttd-kepsek" style="float:right; width:200px; margin-top:20px; margin-bottom:-20px;">
         <?php $bulanx = date ('M');
            if ($bulanx == "Jan"){ $bulan = "Januari";}
			if ($bulanx == "Feb"){ $bulan = "Februari";}
			if ($bulanx == "Mar"){ $bulan = "Maret";}
            if ($bulanx == "Apr"){ $bulan = "April";}
			if($bulanx == "May") { $bulan = "Mei";}
			if($bulanx == "Jun") { $bulan = "Juni";}
			if($bulanx == "Jul") { $bulan = "Juli";}
			if($bulanx == "Agt") { $bulan = "Agustus";}
			if($bulanx == "Sept") { $bulan = "September";}
			if($bulanx == "Okt") { $bulan = "Oktober";}
			if($bulanx == "Nov") { $bulan = "November";}
			if($bulanx == "Des") { $bulan = "Desember";}
            ?>

        <?php $tahun = date ('Y');?>
         <?php $tanggal = date ('d');?>
        <p>Bengkulu, <?php echo $tanggal." ".$bulan." ".$tahun; ?></p>
    </div>
    <div id="ttd" style="width:100%; float:left;">
    <div id="ttd-atasan" style="float:left; width:200px; margin-top:0px;">
            <p>Pejabat Penilai</p>
            <p style="margin-top:70px;">
			<?php foreach ($pejabatpenilai as $row) { 
			echo $row['nama']."<br>".$row['nip']; }?></p>
            <br>
            <pre>
Catatan :				
* AK Bagi PNS yang memangku jabatan fungsional tertentu				
</pre>
    </div>
    <div id="ttd-pegawai" style="float:right; width:200px; margin-top:0px; ">
            <p>Pegawai Negeri Sipil yang dinilai</p>
            <p style="margin-top:70px;">
			<?php foreach ($datapegawai as $row) { 
			echo $row['nama']."<br>".$row['nip']; }?></p>
    </div>
</div>
</div>
</body>
</html>