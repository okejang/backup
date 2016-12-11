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
<title>Penilaian Prestasi Kerja</title>
</head>

<body onload="window.print()">
<div id="header" style="margin-bottom:30px; text-align:center;">
<img src="<?php echo base_url();?>assets/dist/img/garuda.png" width="50px">
<p style="font-weight:bold;">PENILAIAN PRESTASI KERJA <br/> PEGAWAI NEGERI SIPIL<br/></p>
</div>
<p>Jangka Waktu Penilaian <br/> Januari s/d Desember <?php echo date('Y');?><p>
    <table>
        <?php foreach ($datapegawai as $row) { ?>
        <tr style="background-color:none;">
            <td>1</td>
            <td colspan="5">YANG DINILAI</td>
        </tr>
         <tr>
            <td rowspan="5"></td>
            <td>a. Nama</td>
            <td colspan="4"><?php echo $row['nama'] ?></td>
        </tr>
         <tr>
            <td>b. NIP</td>
            <td colspan="4"><?php echo $row['nip'] ?></td>
        </tr>
        <tr>
            <td>c. Pangkat, Golongan Ruang</td>
            <td colspan="4"><?php echo $row['jabatan'] ?></td>
        </tr>
        <tr>
            <td>d. Jabatan / Pekerjaan</td>
            <td colspan="4"><?php echo $row['unitkerja'] ?></td>
        </tr>
        <tr>
            <td>e. Unit Organisasi</td>
            <td colspan="4"><?php echo "IAIN Bengkulu" ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($pejabatpenilai as $row) { ?>
        <tr style="background-color:none;">
            <td>2</td>
            <td colspan="5">PEJABAT PENILAI</td>
        </tr>
         <tr>
            <td rowspan="5"></td>
            <td>a. Nama</td>
            <td colspan="4"><?php echo $row['nama'] ?></td>
        </tr>
         <tr>
            <td>b. NIP</td>
            <td colspan="4"><?php echo $row['nip'] ?></td>
        </tr>
        <tr>
            <td>c. Pangkat, Golongan Ruang</td>
            <td colspan="4"><?php echo $row['jabatan'] ?></td>
        </tr>
        <tr>
            <td>d. Jabatan / Pekerjaan</td>
            <td colspan="4"><?php echo $row['unitkerja'] ?></td>
        </tr>
        <tr>
            <td>e. Unit Organisasi</td>
            <td colspan="4"><?php echo "IAIN Bengkulu" ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($pejabatpnatasan as $row) { ?>
        <tr style="background-color:none;">
            <td>3</td>
            <td colspan="5">ATASAN PEJABAT PENILAI</td>
        </tr>
         <tr>
            <td rowspan="5"></td>
            <td>a. Nama</td>
            <td colspan="4"><?php echo $row['nama'] ?></td>
        </tr>
         <tr>
            <td>b. NIP</td>
            <td colspan="4"><?php echo $row['nip'] ?></td>
        </tr>
        <tr>
            <td>c. Pangkat, Golongan Ruang</td>
            <td colspan="4"><?php echo $row['jabatan'] ?></td>
        </tr>
        <tr>
            <td>d. Jabatan / Pekerjaan</td>
            <td colspan="4"><?php echo $row['unitkerja'] ?></td>
        </tr>
        <tr>
            <td>e. Unit Organisasi</td>
            <td colspan="4"><?php echo "IAIN Bengkulu" ?></td>
        </tr>
        <?php } ?>

        <tr style="background-color:none;">
            <td>4</td>
            <td colspan="4">UNSUR YANG DINILAI</td>
            <td >JUMLAH</td>
        </tr>
         <tr>
            <td rowspan="10"></td>
            <td colspan="2">a. Sasaran Kerja Pegawai (SKP)</td>
            <td>85,24</td>
            <td>x 60%</td>
            <td>51,15</td>
        </tr>
        <?php foreach ($prilakukerja as $row) { ?>
         <tr> 
            <td colspan="1" rowspan="9">b. Perilaku Kerja</td>
            <td>1. Orientasi Pelayanan</td>
            <td><?php echo $row['orientasipelayanan']?></td>
            <td><?php if (($row['orientasipelayanan'])>75 AND ($row['orientasipelayanan'])<=100){
                            echo "(Baik)";}
                            else if (($row['orientasipelayanan'])>60 AND ($row['orientasipelayanan'])<=75){
                            echo "(Cukup)";}
                            else if (($row['orientasipelayanan'])>50 AND ($row['orientasipelayanan'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?></td>
            <td rowspan="8"></td>
        </tr>
         <tr>
            <td>2. Integritas</td>
            <td><?php echo $row['integritas']?></td>
            <td><?php if (($row['integritas'])>75 AND ($row['integritas'])<=100){
                            echo "(Baik)";}
                            else if (($row['integritas'])>60 AND ($row['integritas'])<=75){
                            echo "(Cukup)";}
                            else if (($row['integritas'])>50 AND ($row['integritas'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?></td>
        </tr>
         <tr>
            <td>3. Komitmen</td>
            <td><?php echo $row['komitmen']?></td>
            <td><?php if (($row['komitmen'])>75 AND ($row['komitmen'])<=100){
                            echo "(Baik)";}
                            else if (($row['komitmen'])>60 AND ($row['komitmen'])<=75){
                            echo "(Cukup)";}
                            else if (($row['komitmen'])>50 AND ($row['komitmen'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?></td>
        </tr>
         <tr>
            <td>4. Disiplin</td>
            <td><?php echo $row['disiplin']?></td>
            <td><?php if (($row['disiplin'])>75 AND ($row['disiplin'])<=100){
                            echo "(Baik)";}
                            else if (($row['disiplin'])>60 AND ($row['disiplin'])<=75){
                            echo "(Cukup)";}
                            else if (($row['disiplin'])>50 AND ($row['disiplin'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?></td>
        </tr>
         <tr>
            <td>5. Kerjasama</td>
            <td><?php echo $row['kerjasama']?></td>
            <td><?php if (($row['kerjasama'])>75 AND ($row['kerjasama'])<=100){
                            echo "(Baik)";}
                            else if (($row['kerjasama'])>60 AND ($row['kerjasama'])<=75){
                            echo "(Cukup)";}
                            else if (($row['kerjasama'])>50 AND ($row['kerjasama'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?></td>
        </tr>
         <tr>
            <td>6. Kepemimpinan</td>
            <td><?php echo $row['kepemimpinan']?></td>
            <td><?php if (($row['kepemimpinan'])>75 AND ($row['kepemimpinan'])<=100){
                            echo "(Baik)";}
                            else if (($row['kepemimpinan'])>60 AND ($row['kepemimpinan'])<=75){
                            echo "(Cukup)";}
                            else if (($row['kepemimpinan'])>50 AND ($row['kepemimpinan'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?></td>
        </tr>
         <tr>
            <td>Jumlah</td>
            <td><?php 
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                    if ($kep==""){
                    echo $in+$ko+$di+$ke;
                    }else{
                    echo $in+$ko+$di+$ke+$kep;
                    }
                    ?></td>
        </tr>
         <tr>
            <td>Nilai Rata-rata</td>
            <td><?php 
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                    echo ($in+$ko+$di+$ke+$kep)/5;
                    ?></td>
            <td><?php 
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                    $rata2 = ($in+$ko+$di+$ke+$kep)/5;
                    if (($rata2)>75 AND ($rata2)<=100){
                            echo " (Baik)";}
                            else if (($rata2)>60 AND ($rata2)<=75){
                            echo " (Cukup)";}
                            else if (($rata2)>50 AND ($rata2)<=60){
                            echo " (Kurang)";
                        }else{
                            echo " (Buruk)";
                        }
                    ?></td>
        </tr>
         <tr>
            <td>Nilai Perilaku Kerja</td>
            <td><?php 
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                    echo ($in+$ko+$di+$ke+$kep)/5;
                    ?></td>
            <td>x 40 %</td>
            <td><?php 
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                    echo (($in+$ko+$di+$ke+$kep)/5)*0.4;
                    ?></td>
        </tr>
<?php } ?>
        <tr style="background-color:none;">
            <td colspan="5" rowspan="2" align="center">Nilai Prestasi Kerja</td>
            <td>
                 <?php $nip = $this->session->userdata('nip');
                    $idx = $this->db->query("SELECT * FROM tb_nilaicapai WHERE nip = $nip");
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

    </table>

    <div id="jarak" style="margin-bottom:200px">
    </div>

    <table>
        <tr style="background-color:none;">
            <td >5. KEBERATAN DARI PEGAWAI NEGERI SIPIL YANG DINILAI (APABILA ADA)<br><br><br><br><br><br><br><br><br></td>
            <td >Tanggal ________________________________________</td>

        <tr style="background-color:none;">
            <td >6. TANGGAPAN PEJABAT PENILAI ATAS KEBERATAN<br><br><br><br><br><br><br><br><br></td>
            <td >Tanggal ________________________________________</td>
        </tr>

        <tr style="background-color:none;">
            <td >7. KEPUTUSAN ATASAN PEJABAT PENILAI ATAS KEBERATAN<br><br><br><br><br><br><br><br><br></td>
            <td >Tanggal ________________________________________</td>
        </tr>

        <tr style="background-color:none;">
            <td >8. REKOMENDASI<br><br><br><br><br><br><br><br><br></td>
            <td >Tanggal ________________________________________</td>
        </tr>
    </table>

    <div id="ttd-kepsek" style="float:right; width:250px; margin-top:20px; margin-bottom:-20px;">
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
        <p align="left">9. DIBUAT TANGGAL <?php echo "&nbsp&nbsp&nbsp&nbsp".$bulan." ".$tahun; ?></p>
    </div>
    <div id="ttd" style="width:100%; float:left;">
    
    <div id="ttd-atasan" style="float:right; width:300px; margin-top:0px;">
            <p align="center">PEJABAT PENILAI</p>
            <p align="center" style="margin-top:70px;">
            <?php foreach ($pejabatpenilai as $row) { 
            echo $row['nama']."<br>".$row['nip']; }?></p>
    </div>

</div>

    <div id="ttd-kepsek" style="float:left; width:250px; margin-top:20px; margin-bottom:-20px;">
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
         <?php $tgl = date ('d');
            $tanggal = $tgl+1?>
        <p align="left">10. DITERIMA TANGGAL, <?php echo "&nbsp&nbsp&nbsp&nbsp". $bulan." ".$tahun?></p>
    </div>
    <div id="ttd" style="width:100%; float:left;">
    
    <div id="ttd-pegawai" style="float:left; width:200px; margin-top:0px;">
            <p align="center">PEGAWAI NEGERI SIPIL YANG DINILAI,</p>
            <p align="center" style="margin-top:70px;">
            <?php foreach ($datapegawai as $row) { 
            echo $row['nama']."<br>".$row['nip']; }?></p>
    </div>
</div>

    <div id="ttd-kepsek" style="float:right; width:250px; margin-top:20px; margin-bottom:-20px;">
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
         <?php $tgl = date ('d');
            $tanggal = $tgl+2?>
        <p align="left">11. DITERIMA TANGGAL, <?php echo  "&nbsp&nbsp&nbsp&nbsp". $bulan." ".$tahun?></p>
    </div>
    <div id="ttd" style="width:100%; float:left;">
            <div id="ttd-atasan" style="float:right; width:300px; margin-top:0px;">
            <p align="center">ATASAN PEJABAT<br>YANG MENILAI,</p>
            <p align="center" style="margin-top:70px;">
            <?php foreach ($pejabatpnatasan as $row) { 
            echo $row['nama']."<br>".$row['nip']; }?></p>
    </div>
</div>
</body>
</html>