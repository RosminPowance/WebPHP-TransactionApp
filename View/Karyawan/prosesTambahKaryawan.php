<?php
include ('../../Model/Karyawan.php');

$kr_kode= $_REQUEST['kr_kode'];
$kr_nama = $_REQUEST['kr_nama'];
$kr_dob = $_REQUEST['kr_dob'];
$kr_jk= $_REQUEST['kr_jk'];

$karyawan = new Karyawan();

$karyawan->kr_kode = $kr_kode;
$karyawan->kr_nama = $kr_nama;
$karyawan->kr_dob = $kr_dob;
$karyawan->kr_jk = $kr_jk;

$karyawan->insert();

header('Location: /index.php?halaman=listkaryawan');
