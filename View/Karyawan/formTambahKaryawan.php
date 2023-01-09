<form action="View/Karyawan/prosesTambahKaryawan.php" method="POST">
    <div class="card">

        <div class="card-header">Tambah Karyawan</div>

        <div class="card-body">
            <div class="form-group">
                <label for="">Kode Karyawan</label>
                <input type="text" class="form-control" required name="kr_kode">
            </div>


            <div class="form-group">
                <label for="">Nama Karyawan</label>
                <input type="text" class="form-control" required name="kr_nama">
            </div>


            <div class="form-group">
                <label for="">Tanggal Lahir Karyawan</label>
                <input type="date" class="form-control" required name="kr_dob">
            </div>

            <div class="form-group">
                <label for="">Jenis Kelamin Karyawan</label>
                <select class="form-control" name="kr_jk">
                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

        </div>


        <div class="card-footer">
            <button class="btn btn-primary" type="submit">
                Simpan
            </button>
        </div>




    </div>
</form>