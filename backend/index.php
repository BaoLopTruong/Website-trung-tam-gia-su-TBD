<?php
    session_start();
    if( !isset($_SESSION["user"])){
        header("location:login.php");
    }
?>
<h1>Yêu cầu đăng nhập để trang hoạt động</h1>
<a href="logout.php" title="logout">Logout</a>