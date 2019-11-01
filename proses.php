<?php 
include '../database.php';
$siswa= new Siswa();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

}

if ($aksi == "tambah") {
    $siswa->create($nis,$nama,$alamat);
    header("location:index.php");

}elseif ($aksi == "update") {
    $siswa->update($nis,$nama,$alamat);
    header("location:index.php");
}elseif ($aksi == "delete") {
    $siswa->delete($nis,$nama,$alamat);
    header("location:index.php");
}
?>