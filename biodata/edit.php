<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php 
    include '../database.php';
    $bio = new Biodata();
    foreach ($bio -> edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $jk = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $lahir = $data['tgl_lahir'];
        $umur = $data['umur'];
    }
?>



<fieldset>
    <legend>input biodata</legend>
    <form action="/biodata/proses.php?aksi=update" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <table>
            
            <tr>
                <th>nama siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" required><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <th>jenis kelamin </th>
                <td><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki<input type="radio" name="jenis_kelamin" value="cewe">cewe</td>
            </tr>
             <tr>
                <th>agama </th>
                <td><select name="agama" >
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option value="budha">budha</option>
                    <option value="katolik">katolik</option></select></td>
            </tr>
            <tr>
                <th>tanggal lahir</th>
                <td><input type="date" name="tgl_lahir" value="<?php echo $lahir; ?>" required></td>
            </tr>
            
            <tr>
                <th><input type="submit" name="save" value="simpan"></th>
                
            </tr>
        </table>
        </form>
    </fieldset>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>