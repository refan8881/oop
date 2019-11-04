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
<center>biodata</center>
    <fieldset>
        <legend>biodata</legend>
        <a href="create.php">tambah data biodata</a>
        <table border="1">
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>jenis kelamin</th>
                <th>agama</th>
                <th>tanggal lahir</th>
                <th>umur</th>
                <th colspan ="3">aksi</th>
            </tr>

            <?php 
            include '../database.php';
            $bio = new Biodata();
            $no = 1;
            foreach ($bio->index() as $data) {
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['jenis_kelamin'];?></td>
                    <td><?php echo $data['agama'];?></td>
                    <td><?php echo $data['tgl_lahir'];?></td>
                    <td><?php echo $data['umur'];?></td>
                    <td> <a href ="show.php?id=<?php echo $data['id'];?>">show</a></td>
                    <td> <a href ="edit.php?id=<?php echo $data['id'];?>">edit</a></td>

                    <td>
                    <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete"
                    onclick="return confirm('apakah anda yakin mau menghapus data ini')">
                    delete </a>
                    </td>
             
                </tr>
                <?php 
            }
        ?>
        
        </table>
    
    </fieldset>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>