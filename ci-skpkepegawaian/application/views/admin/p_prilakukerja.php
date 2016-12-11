<html>
<head>
<style type="text/css" media="print">
    table {border: solid 1px #000; border-collapse: collapse; width: 90%; padding-left: 100px;}
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
    
    #ket{margin-left: 50px;}
    #ket1{margin-left: 50px;}
    #ket1 table tr td{border: 0px;}
</style>
<style type="text/css" media="screen">
    table {border: solid 1px #000; border-collapse: collapse; width: 90%}
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
     #ket1 table tr td{border: 0px;}
</style>
<title>Print Data</title>
</head>
<body onload="window.print()">
    <h3 style="margin-bottom:20px; text-align:center;">BUKU CATATAN PENILAIAN PERILAKU PNS</h3>
    <div id="ket1">
    <table style="width:30%; border:0px;">
        <?php foreach ($datapegawai as $row) { ?>
            <tr><td width="10px">Nama</td><td>: <?php echo $row['nama']?></td></tr>
            <tr><td>NIP</td><td>: <?php echo $row['nip']?></td></tr>
        <?php } ?>
    </table>
</div>
    <div id="ket">
    <table>
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">Tanggal</td>
                <td align="center" colspan="3">Uraian</td>
                <td align="center">Nama/NIP dan paraf pejabat penilai</td>
            </tr>
                </thead>
                <tbody>
                <tr>
                <td align="center">1</td>
                <td align="center">2</td>
                <td align="center" colspan="3">3</td>
                <td align="center">4</td>
            </tr>
                <td align="center">1</td>
                <td width="60px">Januari s/d Desember <?php echo date('Y') ?></td>
                <td colspan="3">Penilaian SKP sampai dengan akhir Desember <?php echo date('Y') ?> = 
                        <?php $nip = $this->session->userdata('nip');
                            $idx = $this->db->query("SELECT * FROM tb_nilaicapai WHERE nip = $nip limit 1 ");
                            echo $nilairata = $idx->row()->hasil;
                        ?>
                     <br/>
                    sedangkan penilaian perilaku kerjanya adalah<br/>sebagai berikut :</td>
                <td></td>
             <tr>
            </tr>
                <?php foreach ($prilakukerja as $row) { ?>
                <tr>
                    <td align="center" width="20px" rowspan="3"></td>
                    <td width="60px" rowspan="3"></td>
                    <td width="100px">Orientasi Pelayanan<br>Integritas</br>Komitmen</br>Disiplin</br>Kerjasama</br>Kepemimpinan</td>
                    <td width="50px">=<br>=</br>=</br>=</br>=</br>=</td>
                    <td width="100px"><?php echo $row['orientasipelayanan']?>
                         <?php if (($row['orientasipelayanan'])>75 AND ($row['orientasipelayanan'])<=100){
                            echo "(Baik)";}
                            else if (($row['orientasipelayanan'])>60 AND ($row['orientasipelayanan'])<=75){
                            echo "(Cukup)";}
                            else if (($row['orientasipelayanan'])>50 AND ($row['orientasipelayanan'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?><br/>
                        <?php echo $row['integritas']?>
                        <?php if (($row['integritas'])>75 AND ($row['integritas'])<=100){
                            echo "(Baik)";}
                            else if (($row['integritas'])>60 AND ($row['integritas'])<=75){
                            echo "(Cukup)";}
                            else if (($row['integritas'])>50 AND ($row['integritas'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?><br/>
                        <?php echo $row['komitmen']?>
                       <?php if (($row['komitmen'])>75 AND ($row['komitmen'])<=100){
                            echo "(Baik)";}
                            else if (($row['komitmen'])>60 AND ($row['komitmen'])<=75){
                            echo "(Cukup)";}
                            else if (($row['komitmen'])>50 AND ($row['komitmen'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?><br/>
                        <?php echo $row['disiplin']?>
                      <?php if (($row['disiplin'])>75 AND ($row['disiplin'])<=100){
                            echo "(Baik)";}
                            else if (($row['disiplin'])>60 AND ($row['disiplin'])<=75){
                            echo "(Cukup)";}
                            else if (($row['disiplin'])>50 AND ($row['disiplin'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?><br/>
                        <?php echo $row['kerjasama']?>
                        <?php if (($row['kerjasama'])>75 AND ($row['kerjasama'])<=100){
                            echo "(Baik)";}
                            else if (($row['kerjasama'])>60 AND ($row['kerjasama'])<=75){
                            echo "(Cukup)";}
                            else if (($row['kerjasama'])>50 AND ($row['kerjasama'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "(Buruk)";
                        }?><br/>
                        <?php echo $row['kepemimpinan']?>
                         <?php if (($row['kepemimpinan'])>75 AND ($row['kepemimpinan'])<=100){
                            echo "(Baik)";}
                            else if (($row['kepemimpinan'])>60 AND ($row['kepemimpinan'])<=75){
                            echo "(Cukup)";}
                            else if (($row['kepemimpinan'])>50 AND ($row['kepemimpinan'])<=60){
                            echo "(Kurang)";
                        }else{
                            echo "-";
                        }?>
                    </td>
                    <td width="100px"><?php foreach ($pejabatpenilai as $row) { ?>
                        <p style="text-align:center"><?php echo $row['unitkerja'];?></p>
                        <p style="margin-top:50px; font-size:10px; text-align:center;">
                        <?php echo $row['nama']."<br>".$row['nip']; ?></p>
                    </td>
            </tr>
            <?php } }?>
            <?php foreach ($prilakukerja as $row) { ?>
             <tr>
                <td>Jumlah </td>
                <td>=</td>
                <td>
                    <?php 
                    $or = $row['orientasipelayanan'];
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                     if ($kep==""){
                    echo $or+$in+$ko+$di+$ke;
                    }else{
                    echo $or+$in+$ko+$di+$ke+$kep;
                    }
                    ?>
                </td>
                <td rowspan="2"></td>
            </tr>
            <?php } ?>
            <?php foreach ($prilakukerja as $row) { ?>
             <tr>
                <td>Nilai Rata-rata </td>
                <td>=</td>
                <td>
                    <?php 
                    $or = $row['orientasipelayanan'];
                    $in = $row['integritas'];
                    $ko = $row['komitmen'];
                    $di = $row['disiplin'];
                    $ke = $row['kerjasama'];
                    $kep = $row['kepemimpinan'];
                    if ($kep==""){
                    echo ($or+$in+$ko+$di+$ke)/5;
                    $rata2 = ($or+$in+$ko+$di+$ke)/5;
                    if (($rata2)>75 AND ($rata2)<=100){
                            echo " (Baik)";}
                            else if (($rata2)>60 AND ($rata2)<=75){
                            echo " (Cukup)";}
                            else if (($rata2)>50 AND ($rata2)<=60){
                            echo " (Kurang)";
                        }else{
                            echo " (Buruk)";
                        }
                    }else{
                    echo ($or+$in+$ko+$di+$ke+$kep)/5;
                    $rata2 = ($or+$in+$ko+$di+$ke)/5;
                    if (($rata2)>75 AND ($rata2)<=100){
                            echo " (Baik)";}
                            else if (($rata2)>60 AND ($rata2)<=75){
                            echo " (Cukup)";}
                            else if (($rata2)>50 AND ($rata2)<=60){
                            echo " (Kurang)";
                        }else{
                            echo " (Buruk)";
                        }
                    }
                    ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>