<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
    include '../database.php';
    $siswa = new Siswa();
    foreach ($siswa -> edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
?>



<fieldset>
    <legend>input data siswa</legend>
    <form action="/siswa/proses.php?aksi=update" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <table>
            <tr>
                <th>nomor induk siswa</th>
                <td><input type="number" name="nis" value="<?php echo $nis; ?>" required></td>
            </tr>
            <tr>
                <th>nama siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" required><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <th><input type="submit" name="save" value="simpan"></th>
                
            </tr>
        </table>
        </form>
    </fieldset>
    
</body>
</html>