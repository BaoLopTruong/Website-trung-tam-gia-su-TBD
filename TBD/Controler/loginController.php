<?php
    include ('./session.php');
    include ('./connect.php');
    $u = $_GET['name'];
    //echo $u;
    $_SESSION['username']= $u;
    $p = $_GET['pass'];
    //echo $p;

    $query = "SELECT * FROM account WHERE username='$u' and password ='$p'";

    $data = mysqli_query($conn,$query);
    if(mysqli_num_rows($data) == 1){
        
        header('Location: ./process_role.php');
    
    }else {
            echo '<script language="javascript">';
            echo 'alert("Sai tên Đăng Nhập hoặc Mật Khẩu")';
            
            echo '</script>';
        
            echo '<script language="javascript">';
            
            echo 'window.open("http://localhost/Website-trung-tam-gia-su-TBD/TBD/View/dangnhap.php")';
            echo '</script>';
    }

?>