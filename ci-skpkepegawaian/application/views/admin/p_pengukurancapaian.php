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
<div id="header" style="margin-bottom:30px; text-align:center;">
<h3>PENILAIAN CAPAIAN SASARAN KERJA <br/> PEGAWAI NEGERI SIPIL<br/></h3>
</div>
<div>
<h5>Jangka Waktu Penilaian <br/> Januari s/d Desember <?php echo date('Y');?></h5>
</div>
    <table>
        <thead>
            <tr>
                <td rowspan="2" style="text-align:center; font-weight:bold;">NO</td>
                <td colspan="2" rowspan="2" style="text-align:center; font-weight:bold;">I. KEGIATAN TUGAS PEGAWAI</td>
                <td rowspan="2" style="text-align:center; font-weight:bold;">AK</td>
                <td colspan="4" style="text-align:center; font-weight:bold;">TARGET</td>
                <td rowspan="2" style="text-align:center; font-weight:bold;">AK</td>
                <td colspan="6" style="text-align:center; font-weight:bold;">REALISASI</td>
            </tr>
            <tr>
                <td align="center">Kuant / Output</td>
                <td align="center">Kual / Mutu</td>
                <td align="center">Waktu</td>
                <td align="center" width="150px">Biaya</td>
                <td align="center">Kuant / Output</td>
                <td align="center">Kual / Mutu</td>
                <td align="center">Waktu</td>
                <td align="center">Biaya</td>
                <td align="center">Perhitungan</td>
                <td align="center" width="150px">Nilai Capaian</td>

            </tr>
                <tr>
                <th>1</th>
                <th colspan="2">2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
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
                <td><?php echo $row['AK'];?></td>
                <td><?php echo $row['kuant_pc'];?></td>
                <td><?php echo $row['kual_pc'];?></td>
                <td><?php echo $row['waktu_pc'];?></td>
                <td><?php echo $row['biaya_pc'];?></td>
                <td><?php echo $row['perhit_pc'];?></td>
                <td><?php echo $row['nilai_pc'];?></td>
            </tr>
            <?php 
                }
            } else {
                echo "<tr><td style='text-align: center'>Tidak ada data</td></tr>";
            }
            ?>
			<tr>
				<td></td>
				<td colspan="14" style="font-weight:bold;">II. TUGAS TAMBAHAN DAN KREATIVITAS : </td>
			</tr>
            <tr>
            <td>
                <?php 
                 if (!empty($data)) { $nox = 0;
                foreach ($nilaitambahan as $row) { $nox++;?>
                <?php echo $nox. "<br/><br/>"?>
                <?php }} ?>
            </td>
                <td colspan="2">
                    <?php foreach ($nilaitambahan as $row) { ?>
                    <?php echo $row['kegiatan_tambahan']. "<br/><br/>"?>
                    <?php } ?>
                </td>
                <td></td>
                <td colspan="4"></td>
                <td></td>
                <td colspan="4"></td>
                <td></td>
                <td>
                 <?php $nip = $this->session->userdata('nip');
                    $idx = $this->db->query("SELECT * FROM tb_nilaicapai WHERE nip = '$nip'");
                    $nilaitam = $idx->row()->nilaitam;

                    if($nilaitam == "1"){
                        echo "1";
                    }else if ($nilaitam == "4"){
                        echo "2";
                    }
                ?>
                </td>
            </tr>
           
            <tr>
				<td></td>
				<td colspan="2" style="font-weight:bold;">(kreatifitas)</td>
				<td colspan="12"></td>
			</tr>
			<tr>
				<td colspan="14" rowspan="2" style="text-align:center; font-weight:bold;">Nilai Capaian SKP</td>
				<td>
                <?php $nip = $this->session->userdata('nip');
                    $idx = $this->db->query("SELECT * FROM tb_nilaicapai WHERE nip = '$nip' ORDER BY id desc limit 1");
                    echo $nilairata = $idx->row()->hasil;
                ?>
                </td>
			</tr>
			<tr>
				<td>
                       <?php if ( $nilairata>75 AND  $nilairata <=100){
                            echo "Baik";}
                            else if ( $nilairata >60 AND  $nilairata <=75){
                            echo "Cukup";}
                            else if ( $nilairata >50 AND  $nilairata <=60){
                            echo "Kurang";
                        }else{
                            echo "Buruk";
                        }?>
                </td>
			</tr>
        </tbody>
    </table>
    <div id="ttd-kepsek" style="float:right; width:230px; margin-top:20px; margin-bottom:-10px;">
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
		<div id="" style="float:left; width:200px; margin-top:0px;">
				
		</div>
		<div id="ttd-atasan" style="float:right; width:200px; margin-top:0px; ">
				<p style="width:200px; margin-top:0px; ">Pejabat Penilai</p>
				<p style="margin-top:70px;">
				<?php foreach ($pejabatpenilai as $row) { 
				echo $row['nama']."<br>".$row['nip']; }?></p>
		</div>
	</div>
</body>
</html>