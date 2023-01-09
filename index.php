<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAS ROSMIN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid"></div>
<h3>UAS PWEB ROSMIN</h3>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Menu
            </div>
            <div class="card-body">
                <a class="btn btn-block btn-primary"href="/index.php?halaman=listkaryawan">List karyawan</a>
                <a class="btn btn-block btn-primary" href="/index.php?halaman=tambahkaryawan">Tambah karyawan </a>
                <a class="btn btn-block btn-primary" href="/index.php?halaman=listproyek">List proyek</a>
                <a class="btn btn-block btn-primary" href="/index.php?halaman=tambahproyek">Tambah proyek</a>
            </div>
        </div>
    </div>
    <div class="col-8">
        <?php
        $halaman = isset($_REQUEST['halaman']) ? $_REQUEST['halaman'] : '';
        $include = "landingPage.php";
        if($halaman=="tambahkaryawan"){
            $include = ('View/Karyawan/formTambahKaryawan.php');
        }else if($halaman === "listkaryawan"){
            $include = ('View/Karyawan/listKaryawan.php');
        }else if($halaman == "ubahkaryawan"){
            $include = ('View/Karyawan/formUbahKaryawan.php');
        }else if($halaman == "hapuskaryawan"){
            $include = ('View/Karyawan/konfirmasiHapusKaryawan.php');
        }else if($halaman == "tambahproyek"){
            $include = ('View/Proyek/formTambahProyek.php');
        }else if($halaman == "listproyek"){
            $include = ('View/Proyek/listProyek.php');
        }else if($halaman == "ubahproyek"){
            $include = ('View/Proyek/formUbah.php');
        }else if($halaman == "hapusproyek"){
            $include = ('View/Proyek/konfirmasiHapus.php');
        }else if($halaman == "lihatproyek"){
            $include = ('View/Karyawan/lihatProyek.php');
        }else if($halaman == "assignkaryawan"){
            $include = ('View/Proyek/assignKaryawan.php');
        }
        include_once $include;
        ?>
    </div>
</div>
</body>

</html>