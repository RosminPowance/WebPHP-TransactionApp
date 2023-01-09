<?php
include ('../../Model/Proyek.php');
$py_kode = $_REQUEST['py_kode'];
$proyek = new Proyek();
$proyek->py_kode  = $py_kode;
$proyek->delete();

header('Location: ../../index.php');

