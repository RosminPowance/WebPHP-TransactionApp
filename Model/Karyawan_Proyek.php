<?php

include_once __DIR__.'/../Config/Koneksi.php';

class Karyawan_Proyek
{
    public $kp_id ;
    public $kr_kode;
    public $py_kode;
    public $kp_bonus;

    public static function getAll()
    {
        $query = "select * from karyawan_proyek";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public static function getByPrimaryKey($kp_id)
    {
        $query = "select * from karyawan_proyek where kp_id = '$kp_id' ";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);    }

    public function insert()
    {
        $query = "insert into karyawan_proyek(kp_id, kr_kode, py_kode, kp_bonus) "
            ." values ("
            ."'$this->kp_id', "
            ."'$this->kr_kode', "
            ."'$this->py_kode', "
            ."'$this->kp_bonus',"
            .");";

        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }


    public function update()
    {
        $query = "update karyawan_proyek set "
            . "kr_kode = '$this->kr_kode', "
            . "py_kode  = '$this->py_kode', "
            . "kp_bonus  = '$this->kp_bonus' "
            . "where kp_id = '$this->kp_id'";

        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);    }


    public function delete()
    {
        $query = "delete from karyawan_proyek where kp_id = '$this->kp_id'";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

}