<?php
if (isset($_SESSION['ss_admin'])) {
header('location: ?controller=trangchu');
}
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $loi= array();
    if($username == '') {
        $loi['username']='tai khoan khong dc de trong';
    }
    if($password == '') {
        $loi['password']='mk khong dc de trong';
    }
    if(!$loi){
$user= $db ->get('admin_nhanvien', array('username'=>$username));
if (empty($user)) {
    $loi['username']='Username ko tồn tại';
}
    else{
        if($password!=$user[0]['password']){
        $loi['password']='sai pass hoặc user';
        }
    }

    }
    if (!$loi) {
        $_SESSION['ss_admin1']=$user[0]['full_name'];
        $_SESSION['ss_admin']=$user[0]['id'];
        header('location: ?controller=trangchu');
    }
}
require 'view/V_login.php';
