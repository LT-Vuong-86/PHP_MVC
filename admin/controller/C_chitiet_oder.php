<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $data_oder=$db->get('oder',array());
        $data_oder_detail=$db->get('oder_detail',array('oder_id'=>$data_oder[0]['id']));

    }
}else {
    header("location: ?controller=login");
}
require 'view/V_chitiet_oder.php';