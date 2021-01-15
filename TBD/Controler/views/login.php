<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
</head>
<body>
    <h3>Đăng nhập</h3>
    <p>
        <?php
            if( isset($_SESSION["thongbao"]) ) {
                echo $_SESSION["thongbao"];
                session_unset("thongbao");
            }
        ?>
    </p>
    <form action="login_submit.php" method="POST">
        <table>
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Đăng nhập</button>
                    <button type="reset">Làm mới</button>
                </td>
            </tr>
            
</body>
</html>