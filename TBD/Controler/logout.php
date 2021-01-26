<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    unset($_SESSION['username']);
    unset($_SESSION['role']);

    header('Location: ../View/dangnhap.php');

}



?>