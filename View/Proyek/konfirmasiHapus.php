<!doctype html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>

<body>
<h1>Apakah anda yakin menghapus data ini?</h1>
<?php
include ('../../Model/Proyek.php');
$py_kode = $_REQUEST['py_kode'];
$proyekList = Proyek::getByPrimaryKey($py_kode);
$mhs = [];
while($proyek = mysqli_fetch_object($proyekList))
{
    $proyek = $proyek;
}
?>
<p>
    py_kode : <?=$proyek->py_kode?>
</p>
<p>
    py_nama : <?=$proyek->py_nama?>
</p>
<form action="prosesHapus.php">
    <input type="hidden" name="py_kode" value="<?=$proyek->py_kode?>">
    <a href="index.php"><< Kembali</a>
    <button type="submit">Hapus</button>
</form>
</body>
</html>
