<?php
if (isset($_SESSION['ss_admin'])) {
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
    $data_nhanvien=$db->get('admin_nhanvien', array());
}else{
    header('location: ?controller=login');
}
require 'view/V_dsnhanvien.php';