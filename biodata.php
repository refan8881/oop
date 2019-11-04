<?php 
class Biodata extends Database
{
    //menampilkan semua data
    public function index()
    {
        $databio = mysqli_query($this->koneksi, "select * from biodata");
        // var_dump($databio);
        return $databio;
    }
    //menambah data
    public function create($nama,$alamat,$jk,$agama,$lahir,$umur)
    {
        mysqli_query($this->koneksi,
                        "insert into biodata values(null,'$nama','$alamat','$jk','$agama','$lahir','$umur')");
    }
    //menampilkan data berdasarkan id
    public function show($id)
    {
        $databio = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $databio;
    }

    //menampilkan data berdasarkan id
    public function edit($id)
    {
        $databio =mysqli_query($this->koneksi,
                    "select * from biodata where id='$id'");
                    return $databio;
    }
    //mengupdate data berdasarkan id 
    public function update($id,$nama,$alamat,$jk,$agama,$lahir,$umur)
    {
        mysqli_query($this->koneksi,
                "update biodata set nama='$nama',alamat='$alamat',jenis_kelamin='$jk',agama='$agama',tgl_lahir='$lahir',umur='$umur' where id='$id'");
    }
    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}


?>