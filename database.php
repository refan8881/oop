<?php 
class Database
{
    public $host = "localhost",$user="root",$pass=123,$db="XIRPL2";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi=mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
           // echo "berhasl";
        }else {
           // echo "koneksi database gagal";
        }
    }
}
//data tabel siswa
include 'siswa.php';

include 'biodata.php';

// // data tabel biodata

//koneksi database
$db = new Database();


?>