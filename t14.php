<?php 
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $rayon = $_POST['rayon'];
}


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
    <form action="pindah.php" method="post">
        <label>nama : </label>
        <li><input type="text" name="nama"></li>
        <br>
        <label>nis : </label>
        <li><input type="int" name="nis"></li>
        <br>
        <label>rayon : </label>
        <li><input type="text" name="rayon"></li>
        <br>
        <button type="submit" name="submit">submit</button>
        </ul>
    </form>
</body>
</html>