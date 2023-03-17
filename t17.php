<?php 

require 'kon.php';
$data = query("SELECT * FROM  ank");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <table border = "1" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>jumlah</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach( $data as $dt ) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $dt["nama_barang"] ?></td>
                    <td><?php echo $dt["jumlah"] ?></td>

                    <td>
                        <a href="del.php?id=<?= $dt["id"]?>">hapus</a>
                    </td>
                </tr>
            <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
    </form>
</body>
</html>
