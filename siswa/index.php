<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>data siswa</center>
    <fieldset>
        <legend>data siswa</legend>
        <a href="create.php">tambah data siswa</a>
        <table border="1">
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>nomor induk siswa</th>
                <th>alamat</th>
                <th colspan ="3">aksi</th>
            </tr>

            <?php 
            include '../database.php';
            $siswa = new Siswa();
            $no = 1;
            foreach ($siswa ->index() as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['nis'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td> <a href ="show.php?id=<?php echo $data['id'];?>">show</a></td>
                    <td> <a href ="edit.php?id=<?php echo $data['id'];?>">edit</a></td>

                    <td>
                    <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete"onclick="return confirm('apakah anda yakin mau menghapus data ini')">
                    delete </a>
                    </td>
             
                </tr>
                <?php 
            }
        ?>
        
        </table>
    
    </fieldset>
</body>
</html>