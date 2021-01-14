<?php
    session_start();
    include 'config.php';
    if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' ) {
        // nguoi dung da nhan submit va dien du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $Maloai = 1;
        if( $password != $repassword){
            $_SESSION["thongbao"] = " Nhập lại mật khẩu không chính xác";
            header("location:register.php");
            die();
        }
        $sql = "SELECT * FROM user where username='$username' ";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if( mysqli_num_rows($old) > 0 ){
            $_SESSION["thongbao"] = " Tên đăng nhập đã tồn tại";
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO user ( username, password, Maloai) VALUES ('$username', '$password', '$Maloai') ";
        mysqli_query($conn, $sql);
        $_SESSION["thongbao"] = "Đăng ký thành công";
        header("location:login.php");
    }else{
        $_SESSION["thongbao"] = " Vui lòng nhập đầy đủ thông tin";
        header("location:register.php");
    }

?>