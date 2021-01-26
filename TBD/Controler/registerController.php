<?php
        header('Content-Type: text/html; charset=UTF-8');
        if(isset($_POST['register']))
        {
            include('Connect.php');
            $ID = addslashes($_POST['ID']);
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $repassword = addslashes($_POST['repassword']);
            $maloai = addslashes($_POST['maloai']);

            if(!$ID || !$username || !$password || !$repassword || !$maloai ){
               echo "Vui lòng điền đầy đủ thông tin!";
               exit;
            }
            $query = mysqli_query($conn,"SELECT username FROM account WHERE username = '".$username."'");
            if(mysqli_num_rows($query)!=0){
                echo "Tên đăng nhập đã tồn tại!";
                exit;
            }
            if($password != $repassword){
                echo "Xác nhận mật khẩu không đúng";
                exit;
            }
            //$password= md5($password);
            include('Model/account.php');
            $account = new account($username,$repassword,$maloai);
            $query = "INSERT INTO account  VALUES('$ID', '$username', '$password', '$maloai')";
            echo $query;
            mysqli_query($conn,$query);

            //header("location: login.php");
        }
?>
