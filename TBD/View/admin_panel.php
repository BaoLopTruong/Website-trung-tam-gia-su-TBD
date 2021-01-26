<?php
session_start();
if($_SESSION['role']!= "1"){
    header('Location: ./dangnhap.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="../Controler/logout.php">DANG XUAT</a>
</body>
</html>