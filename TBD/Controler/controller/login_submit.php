<?php
    session_start();
    include '../controller/config.php';
    if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' ) {
        // nguoi dung da nhan submit va dien du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user where username='$username' AND password='$password' ";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) > 0 ){
            $_SESSION["user"] = $username;
            header("location: index.php");
        }else{
            $_SESSION["thongbao"] = " Sai tên đăng nhập hoặc mật khẩu";
            header("location: login.php"); 
        }
    }else{
        $_SESSION["thongbao"] = " Vui lòng nhập đầy đủ thông tin";
        header("location: login.php");
    }

?>