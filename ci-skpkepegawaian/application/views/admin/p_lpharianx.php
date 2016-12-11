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
<title>Print Data</title>
</head>

<body>
<?php foreach ($datax as $row) { ?>
<?php 
$idx = $this->db->query("SELECT distinct(tanggal) from tb_laporanharian 
where nip ='123' ");
echo $tanggal = $idx->row()->tanggal;?>
<div class="row">
<div  class="col-md-12">
    <div id="ket">
    <table style="width:300px; border:0px;">
        <?php foreach ($datapegawai as $row) { ?>
        <tr><td style="width:100px">Nama</td></td><td>: <?php echo $row['nama']?></td></tr>
        <tr><td>Jabatan</td></td><td>: <?php echo $row['jabatan']?></td></tr>
        <tr><td>Unit Kerja</td></td><td>: <?php echo $row['unitkerja']?></td></tr>
        <tr><td>Unit Organisasi</td></td><td>: <?php echo "IAIN Bengkulu"?></td></tr>
        <?php } ?>
       
    </table>
    </div>
    <table>
        <thead>
            <tr>
                <td align="center">No</td>
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
            </tr>
                </thead>
                <tbody>
                <?php 
                $no = ($this->uri->segment(4) + 1 );
                foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $no;?></td>
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
            <p>Atasan Langsung</p>
            <p style="margin-top:70px;">
            <?php foreach ($pejabatpenilai as $row) { 
            echo $row['nama']."<br>".$row['nip']; }?></p>
    </div>
    <div id="ttd-pegawai" style="float:right; width:200px; margin-top:0px;">
            <p>Pejabat yang dinilai</p>
            <p style="margin-top:70px;">
            <?php foreach ($datapegawai as $row) { 
            echo $row['nama']."<br>".$row['nip']; }?></p>
    </div>
</div>
</div>
</div>
</div>
<?php } ?>
</body>
</html>

