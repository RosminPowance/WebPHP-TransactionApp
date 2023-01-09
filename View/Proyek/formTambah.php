<!doctype html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Form Tambah Proyek</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-4">
            <form action="prosesTambahProyek.php" method = "POST">
                <div class="card">
                    <div class="card-header">Form Tambah</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">py_kode</label>
                            <input class="form-control" type="text" required name="py_kode" />
                        </div>
                        <div class="form-group">
                            <label for="">py_nama</label>
                            <input class="form-control"type="text" required name="py_nama" />
                        </div>
                        <div class="form-group">
                            <label for=""> py_dedline</label>
                            <input class="form-control" type="date" required name="py_dedline" />
                        </div>
                        <div class="form-group">
                            <label for=""> py_dominal</label>
                            <select class="form-control"name="py_dominal" >
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for=""> Karyawan Wali</label>
                            <select class="form-control" required name="rk_kode">
                                <option selected disabled value="">Pilih Karyawan Wali</option>
                                <?php
                                include ('../../Model/Karyawan.php');
                                $karyawanList= Karyawan::getAll();
                                while($karyawan = mysqli_fetch_object($karyawanList)){
                                    ?>
                                    <option value=<?=$karyawan->kr_kode?>>
                                        <?= $karyawan->kr_kode ?> | <?= $karyawan->kr_nama?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a class="btn btn-info" href="/Index.php">Kembali</a>
                        <button class="btn btn-success" type="Submit">
                            <i class="fas fa-save"></i>
                            Simpan Proyek
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
</div>
</div>


</body>
</div>
</html>
