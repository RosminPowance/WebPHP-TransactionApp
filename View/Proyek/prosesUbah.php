<?php
include('../../Model/Proyek.php');

$py_kode = $_REQUEST['py_kode'];
$py_nama = $_REQUEST['py_nama'];
$py_deadline = $_REQUEST['py_deadline'];
$py_nominal = $_REQUEST['py_nominal'];

$proyek = new Proyek();

$proyek->py_kode = $py_kode;
$proyek->py_nama = $py_nama;
$proyek->py_deadline = $py_deadline;
$proyek->py_nominal = $py_nominal;

$proyek->update();

header( 'Location: /index.php?halaman=listproyek');
