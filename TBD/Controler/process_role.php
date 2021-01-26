<?php

include ('./session.php');

$user = $_SESSION['username'];
$conn = mysqli_connect("localhost","root","","quanlygiasu");
$query = "SELECT maloai from account where username = '$user'";

$data = mysqli_query($conn,$query);
$arraydata = array();

while($row = mysqli_fetch_assoc($data)){
    array_push($arraydata,new Lists($row['maloai']));
}

$_SESSION['role'] = $arraydata[0]->maloai;
echo $_SESSION['role'];

if($_SESSION['role'] == 1 ){ header('Location: ../View/admin_panel.php');}
elseif($_SESSION['role'] == 2) { header('Location: ../View/giasu_page.php');}
elseif($_SESSION['role'] == 3) { header('Location: ../View/gioi_thieu.php');}

class Lists
{
    function __construct($maloai)
    {
        # code...
        $this->maloai = $maloai;
    }
}

?>