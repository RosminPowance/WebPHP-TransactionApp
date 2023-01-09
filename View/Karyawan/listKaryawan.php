<div class="card">
    <div class="card-header">Data Karyawan</div>
    <div class="card-body">
        <table class="table table-hover table-sm table-borderless">
            <thead class="table-dark">
    <tr>
        <th>No</th>
        <th>kr_kode</th>
        <th>kr_nama</th>
        <th>kr_dob</th>
        <th>kr_jk</th>
        <th>Action</th>

    </tr>
            </thead>
    <?php
    include('Model/Karyawan.php');
    $karyawanList= Karyawan::getAll();
    $no = 1;
    while($karyawan = mysqli_fetch_object($karyawanList)){
        ?>

        <tr>
            <td><?=$no++?></td>
            <td><?= $karyawan->kr_kode?></td>
            <td><?= $karyawan->kr_nama?></td>
            <td><?= $karyawan->kr_dob?></td>
            <td><?= $karyawan->kr_jk?></td>
            <td>
                <a class="btn btn-sm btn-warning"
                   href="/index.php?halaman=ubahkaryawan&kr_kode=<?= $karyawan->kr_kode ?>">
                    <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-sm btn-danger" href="/index.php?halaman=hapuskaryawan&kr_kode=<?= $karyawan->kr_kode ?>">
                    <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-sm btn-info" href="/index.php?halaman=lihatproyek&kr_kode=<?= $karyawan->kr_kode ?>">
                    <i class="fas fa-list"></i>
                    Lihat Proyek
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
    </div>
</div>




