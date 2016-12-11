<style type="text/css" media="print">
    table {border-collapse: collapse; width: 33%; margin:auto;}
    table tr td { padding: 7px 5px; font-size: 10px; }
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
    table {border-collapse: collapse; width: 30%; margin:auto;}
    table tr td { padding: 7px 5px; font-size: 10px; }
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
<div id="border" style="width:90%; border:3px solid black; margin:auto;">
    <div id="header" style="margin:50px 0px 30px 0px; text-align:center;">
    <img src="<?php echo base_url();?>assets/dist/img/garuda.png" width="50px">
    <p style="font-weight:bold;">PENILAIAN PRESTASI KERJA <br/> PEGAWAI NEGERI SIPIL<br/></p>
     <p style="font-weight:bold; margin:80px 0px 100px 0px;">Jangka Waktu Penilaian<br/> Januari s/d Desember <?php echo date('Y')?><br/></p>
</div>
    <table>
        <?php foreach ($datapegawai as $row) { ?>
        <tr><td>Nama Pegawai</td><td>: <?php echo $row['nama']?></td>
        <tr><td>NIP</td><td>: <?php echo $row['nip']?></td>
        <tr><td>Pangkat Golongan Ruang</td><td>: <?php echo $row['jabatan']?></td>
        <tr><td>Jabatan</td><td>: <?php echo $row['unitkerja']?></td>
        <tr><td>Unit Kerja</td><td>: <?php echo "IAIN Bengkulu" ?></td>
        <?php } ?>
    </table>
<div style="margin:400px 0px 50px 0px;">
    <p style="font-weight:bold; text-align:center;">IAIN BENGKULU <br/> TAHUN <?php echo date('Y') ?><br/></p>
</div>
</div>
</body>
</html>