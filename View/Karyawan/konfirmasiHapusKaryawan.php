
<!doctype html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>

<body>
<h1>Apakah anda yakin menghapus data ini?</h1>
<?php
include_once ('../../Model/Karyawan.php');
$kr_kode = $_REQUEST['kr_kode'];
$karyawanList = Karyawan::getByPrimaryKey($kr_kode);
$proyek = [];
while($karyawan = mysqli_fetch_object($karyawanList))
{
    $karyawan = $karyawan;
}
?>
<p>
    kr_kode : <?=$karyawan->kr_kode?>
</p>
<p>
    kr_nama : <?=$karyawan->kr_nama?>
</p>
<form action="prosesHapusKaryawan.php">
    <input type="hidden" name="kr_kode" value="<?=$karyawan->kr_kode?>">
    <a href="list.php"><< Kembali</a>
    <button type="submit">Hapus</button>
</form>
</body>
</html>