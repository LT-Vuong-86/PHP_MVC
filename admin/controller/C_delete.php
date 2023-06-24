<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    if(isset($_POST['ok'])) {
        $data=$db->delete('admin_nhanvien',array('id'=>$id));
        header('location: ?controller=trangchu');
    }
    if(isset($_POST['huy'])) {
        header('location: ?controller=trangchu');
    }
   
}
require 'view/V_delete_nhanvien.php';