<!doctype html>
<html>
<head>
    <title>List Perwalian Karyawan</title>
</head>
<body>
<?php
include_once ('../../Model/Karyawan_Proyek.php');
?>
<h1>List Karyawan Proyek Perwalian</h1>
<p>
    <?php
    $kp_id = $_REQUEST['kp_id'];
    $karyawanProyekList= Karyawan_Proyek::getBykp_idkaryawan_proyek($kp_id);
    $karyawanProyekList = Karyawan_Proyek::getByPrimaryKey($kp_id);
    $karyawan_proyek = [];
    while($data = mysqli_fetch_object($karyawanProyekList))
    {
        $karyawan_proyek = $data;
    }
    ?>
</p>
<p>
    No Induk Dosen : <?=$dsn->no_induk_dosen?>
    Nama Dosen : <?=$dsn->nama_dosen?>
</p>
<table border="1">
    <tr>
        <th>No</th>
        <th>kp_id</th>
        <th>kr_kode</th>
        <th>py_kode</th>
        <th>kp_bonus</th>
    </tr>
    <?php
    $no = 1;
    while($karyawan_proyek = mysqli_fetch_object($karyawanProyekList)){
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?= $karyawan_proyek->kp_id?></td>
            <td><?= $karyawan_proyek->kr_kode?></td>
            <td><?= $karyawan_proyek->py_kode?></td>
            <td><?= $karyawan_proyek->kp_bonus?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>