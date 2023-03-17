<?php 

include 'kon2.php';
 
error_reporting(0);
 
session_start();
if (isset($_SESSION['username'])) {
    header("Location: isi.php");
} 
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($server, $sql);
    
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username']; 
        
        header("Location: isi.php");

    } else {
        echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
    }
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
    <form action="" method="post">
        <label>email : </label>
        <li><input type="text" name="username"></li>
        <br>
        <label>password : </label>
        <li><input type="password" name="password"></li>
        <br>
        <button type="submit" name="submit">submit</button>
        </ul>
    </form>
</body>
</html>