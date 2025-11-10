<?php
$user = $_POST['user']??'';
$pass = $_POST['pass']??'';
if ($user == 'admin' && $pass == 'root'){
    if (!isset($_SESSION)) session_start();
    $_SESSION['admin']=$user;
    header('location:../../../index.php');
    exit;
}
header('location:login.html');
?>