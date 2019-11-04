<?php 
include '../database.php';
$bio= new Biodata();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $lahir = $_POST['tgl_lahir'];
    $umur = date('Y') - $lahir;

}

if ($aksi == "tambah") {
    $bio->create($nama,$alamat,$jk,$agama,$lahir,$umur);
    header("location:index.php");

}elseif ($aksi == "update") {
    $bio->update($id,$nama,$alamat,$jk,$agama,$lahir,$umur);
    header("location:index.php");
}elseif ($aksi == "delete") {
    $bio->delete($_GET['id']);
    header("location:index.php");
}
?>