<?php
include('Model/Karyawan.php');
$kode = $_REQUEST['kr_kode'];
$krList = Karyawan::getByPrimaryKey($kode);
$kr =[];
while ($karyawan = mysqli_fetch_object($krList)) {
    $kr = $karyawan;
}
?>
<form action="View/Karyawan/prosesUbahKaryawan.php" method="POST">
    <div class="card">
        <div class="card-header">Ubah Karyawan</div>
        <div class="card-body">
            <div class="form-group">
                <label>Kode Karyawan</label>
                <input class="form-control" value="<?=$kr->kr_kode ?>" readonly type="text" required name="kr_kode"/>
            </div>
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input class="form-control" value="<?=$kr->kr_nama ?>" type="text" required name="kr_nama"/>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir Karyawan</label>
                <input class="form-control" value="<?=$kr->kr_dob ?>" type="date" required name="kr_dob"/>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin Karyawan</label>
                <select class="form-control" value="<?=$kr->kr_jk ?>" name="kr_jk">
                    <option value="L" <?= ($kr->kr_jk == "L") ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="P" <?= ($kr->kr_jk == "P") ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i>
                Simpan</button>
        </div>
    </div>
    </div>
</form>