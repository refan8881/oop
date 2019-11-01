<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>input data siswa</legend>
    <form action="/siswa/proses.php?aksi=tambah" method="post"></form>

        <table>
            <tr>
                <th>nomor induk siswa</th>
                <td><input type="number" nama="nis" required></td>
            </tr>
            <tr>
                <th>nama siswa</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" required></td>
            </tr>
            <tr>
                <th><input type="submit" name="save" value="simpan"></th>
                
            </tr>
        </table>
    </fieldset>
    
</body>
</html>