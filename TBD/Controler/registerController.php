<?php
    include ('./connect.php');
    include ('./session.php');
//    include ('../Module/account.php');

    
    $u = $_GET['name'];
    $p= $_GET['pass'];
    $rp = $_GET['repass'];
    $ml = $_GET['maloai'];

    // echo $u ;
    // echo $p;
    // echo $rp;
    // echo $ml; 
    $query = "INSERT INTO account  VALUES ('','$u', '$p', '$ml')";
    mysqli_query($conn,$query);
    $query1 = "SELECT * FROM account WHERE username = '$u' and password ='$p' and maloai = '$ml'";
    $data = mysqli_query($conn,$query1);

    if(mysqli_num_rows($data) > 0 )
    {
        header('Location: ../View/dangnhap.php');
    } else {
       header('Location: ../View/dangki.php');
    }

    
?>
