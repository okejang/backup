<html>
<head>
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
</style>
<title>Print Data</title>
</head>

<body onload="window.print()">
    <center><b style="font-size: 20px">REKAPITULASI LAPORAN HARIAN PEGAWAI</b><br>
    </center><br>
    
    <table>
        <thead>
            <tr>
                <td align="center">No</td>
                <td align ="center">NIP</td>
                <td align="center">Kegiatan</td>
                <td align="center">Output</td>
                <td align="center">Volume</td>
                <td align="center">Satuan</td>
                <td align="center" width="150px">Keterangan</td>
            </tr>
                <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
            </tr>
                </thead>
                <tbody>
                <?php 
                $no = ($this->uri->segment(4) + 1 );
                foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['nip'];?></td>
                    <td><?php echo $row['kegiatan'];?></td>
                    <td><?php echo $row['output'];?></td>
                    <td><?php echo $row['volume'];?></td>
                    <td><?php echo $row['satuan'];?></td>
                    <td><?php echo $row['keterangan'];?></td>
            </tr>
            <tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>

