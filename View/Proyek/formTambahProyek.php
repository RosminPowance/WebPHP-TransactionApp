<form action="View/Proyek/prosesTambahProyek.php" method="POST">
    <div class="card">
        <div class="card-header">Tambah Proyek</div>

        <div class="card-body">
            <div class="form-group">
                <label for="">Kode Proyek</label>
                <input type="text" class="form-control" required name="py_kode">
            </div>

            <div class="form-group">
                <label for="">Nama Proyek</label>
                <input type="text" class="form-control" required name="py_nama">
            </div>

            <div class="form-group">
                <label for="">deadline</label>
                <input type="date" class="form-control" required name="py_deadline">
            </div>

            <div class="form-group">
                <label for="">nominal Proyek</label>
                <input type="text" class="form-control" required name="py_nominal">
            </div>

        </div>

        <div class="card-footer">
            <button class="btn btn-primary" type="submit">
                simpan
            </button>
        </div>




    </div>
</form>