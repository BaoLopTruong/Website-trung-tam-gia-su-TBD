<?php
    include ('../Controler/session.php');
    $ten = $_SESSION['username'];
    // echo $ten;
    $conn = mysqli_connect("localhost", "root", "", "quanlygiasu");
    $query = "SELECT ID FROM account WHERE username='$ten'";
    $data = mysqli_query($conn,$query);
    $arraydata = array();

    while($row = mysqli_fetch_assoc($data)){
    array_push($arraydata,new ID($row['ID']));
}
    $ID = $arraydata[0]->username;
   // echo $ID;
//$_SESSION['role'] = $arraydata[0]->maloai;
    //echo $_SESSION['role'];
    
    $query1 = "SELECT info_phhs.hotenhs FROM khoahoc inner join datakh on khoahoc.ID_KH = datakh.ID_KH inner join info_phhs on info_phhs.ID = datakh.ID
where khoahoc.ID = '$ID'";
    $data2 = mysqli_query($conn,$query1);
    $arraydata2 = array();
    while($row = mysqli_fetch_assoc($data2)){
    array_push($arraydata2,new lists($row['hotenhs']));
    }
    echo json_encode($arraydata2,256);
class ID
{
    function __construct($username)
    {
        # code...
        $this->username = $username;
    }
}

class lists{
    function __construct($hoten)
    {
        # code...
        $this->hoten = $hoten;
    }
}


?>