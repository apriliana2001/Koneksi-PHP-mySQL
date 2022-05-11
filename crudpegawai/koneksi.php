<?php
class database{
    var $host="localhost";
    var $user="root";
    var $pass="";
    var $db="data_pegawai";

    function __construct(){
        mysql_connect($this->host,$this->user,$this->pass);
        mysql_select_db($this->db);
    }
    function tampil_data(){
        $data=mysql_query("SELECT * FROM pegawai");
        while($d=mysql_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function input($nama,$alamat,$usia){
        mysql_query("insert into user values('','$nama_peg','$email_peg','$alamat_peg','$gol_id')");
    }

    function edit($id){
    $data=mysql_query("SELECT * FROM pegawai WHERE id='$id_pegawai'");
    while($x=mysql_fetch_array($data)){
        $result[]=$x;
    }
    return $result;
    }

    function update($id_pegawai,$nama_peg,$email_peg,$alamat_peg,$gol_id){
        mysql_query("UPDATE pegawai SET nama='$nama',email='$email',alamat='$alamat', golongan='$gol_id'WHERE id='$id_pegawai'");
    }

    function hapus($id){
        mysql_query("DELETE FROMpegawai where id='$id_pegawai'");
    }
}