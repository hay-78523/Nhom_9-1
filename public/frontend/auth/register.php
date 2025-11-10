<?php
$user = $_POST['user']??'';
$pass = $_POST['pass']??'';
$passconfirm = $_POST['passconfirm']??'';
if ($pass != $passconfirm){
    header('location:register.html');
    exit;
}else
    if ($user == 'admin' && $pass == 'root'){
        if (!isset($_SESSION)) session_start();
        $_SESSION['admin']=$user;
        header('location:../../../index.php');
        exit;
    }
header('location:register.html');
?>