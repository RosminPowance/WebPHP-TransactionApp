<div class="card">
    <div class="card-header">Data Proyek</div>
    <div class="card-body">
        <table class="table table-hover table-sm table-borderless">
            <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deadline</th>
                <th>Nominal</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include('Model/Proyek.php');
            $pyList = Proyek::getAll();
            $nomer = 1;
            while ($proyek = mysqli_fetch_object($pyList)) {
                ?>
                <tr>
                    <td><?= $nomer++ ?></td>
                    <td><?= $proyek->py_kode ?></td>
                    <td><?= $proyek->py_nama ?></td>
                    <td><?= $proyek->py_deadline ?></td>
                    <td><?= "Rp. ".number_format($proyek->py_nominal,0,",",".") ?></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="/index.php?halaman=ubahproyek&py_kode=<?= $proyek->py_kode ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="/index.php?halaman=hapusproyek&py_kode=<?= $proyek->py_kode ?>">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a class="btn btn-sm btn-success" href="/index.php?halaman=lihatproyek&py_kode=<?= $proyek->py_kode ?>">
                            <i class="fas fa-address-card"></i>
                            Assign Karyawan
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
