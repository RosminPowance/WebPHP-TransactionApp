<?php

include_once __DIR__.'/../Config/Koneksi.php';

class Proyek
{
    public $py_kode;
    public $py_nama;
    public $py_deadline;
    public $py_nominal;

    public static function getAll()
    {

        $query = "select * from proyek";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

    public static function getByPrimaryKey($py_kode)
    {
        $query = "select * from proyek where py_kode = '$py_kode' ";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);    }

    public function insert()
    {
        $query = "insert into proyek(py_kode, py_nama, py_deadline, py_nominal) "
            ." values ("
            ."'$this->kr_kode', "
            ."'$this->kr_nama', "
            ."'$this->kr_deadline', "
            ."'$this->kr_nominal'"
            .");";

        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }


    public function update()
    {
        $query = "update proyek set "
            . "py_nama = '$this->py_nama', "
            . "py_deadline  = '$this->py_deadline', "
            . "py_nominal  = '$this->py_nominal', "
            . "where py_kode = '$this->py_kode', ";

        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);    }


    public function delete()
    {
        $query = "delete from proyek where py_kode = '$this->py_kode'";
        $conn = new Koneksi();
        return mysqli_query($conn->koneksi, $query);
    }

}