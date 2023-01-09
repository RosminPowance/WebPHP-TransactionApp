<?php
include('Model/Proyek.php');
$kode = $_REQUEST['py_kode'];
$pyList = Proyek::getByPrimaryKey($kode);
$py =[];
while ($proyek = mysqli_fetch_object($pyList)) {
    $py = $proyek;
}
?>
<form action="View/Proyek/prosesUbah.php" method="POST">
    <div class="card">
        <div class="card-header">Ubah Proyek</div>
        <div class="card-body">
            <div class="form-group">
                <label>Kode Proyek</label>
                <input class="form-control" value="<?= $py->py_kode ?>" readonly type="text" required name="py_kode"/>
            </div>
            <div class="form-group">
                <label>Nama Proyek</label>
                <input class="form-control" value="<?= $py->py_nama ?>" type="text" required name="py_nama"/>
            </div>
            <div class="form-group">
                <label>Deadline Proyek</label>
                <input class="form-control" value="<?= $py->py_deadline ?>" type="date" required name="py_deadline"/>
            </div>
            <div class="form-group">
                <label>Nominal Proyek</label>
                <input class="form-control" value="<?= $py->py_nominal ?>" type="text" required name="py_nominal"/>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i>
                Simpan </button>
        </div>
    </div>
    </div>
</form>