<?php
    header('Content-Type: text/html; charset=UTF-8');
        if(isset($_POST['register']))
        {
            include('Connect.php');
            $hoten = addslashes($_POST['hoten']);
            $email = addslashes($_POST['email']);
            $ten_lh = addslashes($_POST['ten_lh']);
            $sdt = addslashes($_POST['sdt']);
            $quequan = addslashes($_POST['quequan']);

            if(!$hoten || !$email || !$ten_lh || !$sdt || !$quequan ){
               echo "Vui lòng điền đầy đủ thông tin!";
               exit;
            }
                      
            include('Model/info_giasu.php');
            $info_giasu = new info_giasu($hoten,$email,$sdt,$quequan);
            $query = "INSERT INTO info_giasu  VALUES('$hoten', '$email', '$sdt', '$quequan')";
            echo $query;
            mysqli_query($conn,$query);

        }

?>