<?php

include_once __DIR__.'/../Config/Koneksi.php';

class Karyawan
{
    public $kr_kode;
    public $kr_nama;
    public $kr_dob;
    public $kr_jk;

    public static function getAll()
    {
        $query = "select * from karyawan";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public static function getByPrimaryKey($kr_kode)
    {
        $query = "select * from karyawan where kr_kode = '$kr_kode' ";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);    }

    public function insert()
    {
        $query = "insert into karyawan(kr_kode, kr_nama, kr_dob, kr_jk) "
            ." values ("
            ."'$this->kr_kode', "
            ."'$this->kr_nama', "
            ."'$this->kr_dob', "
            ."'$this->kr_jk'"
            .");";

        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }


    public function update()
    {
        $query = "update karyawan set "
            . "kr_nama = '$this->kr_nama', "
            . "kr_dob  = '$this->kr_dob', "
            . "kr_jk   = '$this->kr_jk' "
            . "where kr_kode = '$this->kr_kode'";

        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);    }


    public function delete()
    {
        $query = "delete from karyawan where kr_kode = '$this->kr_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

}