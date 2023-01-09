<?php
include ('../../Model/Karyawan.php');
$kr_kode = $_REQUEST['kr_kode'];
$karyawan = new Karyawan();
$karyawan->kr_kode  = $kr_kode;
$karyawan->delete();

header('Location: list.php');