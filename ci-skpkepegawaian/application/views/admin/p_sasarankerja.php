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
	<table>
        <tr style="background-color:black; font-weight:bold; text-align:center;">
            <td colspan="5">DATA SASARAN KERJA PEGAWAI</td>
        </tr>
        <?php foreach ($datapegawai as $row) { ?>
        <tr style="background-color:yellow;">
            <td>1</td>
            <td colspan="3">YANG DINILAI</td>
        </tr>
         <tr>
            <td rowspan="5"></td>
            <td>a. Nama</td>
            <td>:</td>
            <td><?php echo $row['nama'] ?></td>
        </tr>
         <tr>
            <td>b.NIP</td>
            <td>:</td>
            <td><?php echo $row['nip'] ?></td>
        </tr>
        <tr>
            <td>c. Pangkat/Gol.Ruang</td>
            <td>:</td>
            <td><?php echo $row['jabatan'] ?></td>
        </tr>
        <tr>
            <td>d. Jabatan</td>
            <td>:</td>
            <td><?php echo $row['unitkerja'] ?></td>
        </tr>
        <tr>
            <td>e. Unit Kerja</td>
            <td>:</td>
            <td><?php echo "IAIN Bengkulu" ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($pejabatpenilai as $row) { ?>
        <tr style="background-color:green;">
            <td>2</td>
            <td colspan="3">PEJABAT PENILAI</td>
        </tr>
         <tr>
            <td rowspan="5"></td>
            <td>a. Nama</td>
            <td>:</td>
            <td><?php echo $row['nama'] ?></td>
        </tr>
         <tr>
            <td>b.NIP</td>
            <td>:</td>
            <td><?php echo $row['nip'] ?></td>
        </tr>
        <tr>
            <td>c. Pangkat/Gol.Ruang</td>
            <td>:</td>
            <td><?php echo $row['jabatan'] ?></td>
        </tr>
        <tr>
            <td>d. Jabatan</td>
            <td>:</td>
            <td><?php echo $row['unitkerja'] ?></td>
        </tr>
        <tr>
            <td>e. Unit Kerja</td>
            <td>:</td>
            <td><?php echo "IAIN Bengkulu" ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($pejabatpnatasan as $row) { ?>
        <tr style="background-color:green;">
            <td>3</td>
            <td colspan="3">ATASAN PEJABAT PENILAI</td>
        </tr>
         <tr>
            <td rowspan="5"></td>
            <td>a. Nama</td>
            <td>:</td>
            <td><?php echo $row['nama'] ?></td>
        </tr>
         <tr>
            <td>b.NIP</td>
            <td>:</td>
            <td><?php echo $row['nip'] ?></td>
        </tr>
        <tr>
            <td>c. Pangkat/Gol.Ruang</td>
            <td>:</td>
            <td><?php echo $row['jabatan'] ?></td>
        </tr>
        <tr>
            <td>d. Jabatan</td>
            <td>:</td>
            <td><?php echo $row['unitkerja'] ?></td>
        </tr>
        <tr>
            <td>e. Unit Kerja</td>
            <td>:</td>
            <td><?php echo "IAIN Bengkulu" ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>