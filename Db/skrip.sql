create database uas_pweb_2021_ganjil;

create table karyawan (
    kr_kode varchar (10)     not null  primary key ,
    kr_nama varchar (100)    not null,
    kr_dob date              not null ,
    kr_jk enum ('L','P')     not null  default 'L'
);
create  table proyek (
    py_kode varchar (10)    not  null  primary key ,
    py_nama varchar (100)   not null,
    py_deadline date        not null,
    py_nominal  int         not null default 1000000
);

create table karyawan_proyek (
    kp_id   int  not null primary key auto_increment,
    kr_kode varchar(10) not null ,
    py_kode varchar(10) not null ,
    kp_bonus int,
    foreign  key (kr_kode) references karyawan (kr_kode),
    foreign  key (py_kode) references proyek (py_kode)
);
