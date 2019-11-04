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
<fieldset>
    <legend>biodata</legend>
    <form action="/biodata/proses.php?aksi=tambah" method="post">

        <table>
            
            <tr>
                <th>nama </th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" cols="30" required></textarea></td>
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
                <th>tanggal lahir </th>
                <td><input type="date" name="tgl_lahir" required></td>
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