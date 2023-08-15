<?php
if (isset($_SESSION['ss_admin'])) {
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
    $data_nhanvien=$db->get('admin_nhanvien', array());
    $data_product=$db->get('product', array());
    $data_order=$db->get('oder',array());
    // $data_order_detail=$db->get('oder_detail',array('oder_id'=>$data_order[0]['id']));
}else{
    header('location: ?controller=login');
}
include './view/V_trangchu.php';