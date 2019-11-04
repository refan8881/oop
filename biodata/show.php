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
    foreach ($bio -> show($_GET['id']) as $data) {
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
    <form action="/biodata/proses.php?aksi=update" method="post"></form>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <table>
            
            <tr>
                <th>nama siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
             <tr>
                <th>jenis kelamin</th>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $jk; ?>" readonly></td>
            </tr>
             <tr>
                <th>agama</th>
                <td><input type="text" name="agama" value="<?php echo $agama; ?>" readonly></td>
            </tr>
             <tr>
                <th>tanggal lahir</th>
                <td><input type="date" name="tgl_lahir" value="<?php echo $lahir; ?>" readonly></td>
            </tr>
             <tr>
                <th>umur</th>
                <td><input type="number" name="umur" value="<?php echo $umur; ?>" readonly></td>
            </tr>
            
        </table>
    </fieldset>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>