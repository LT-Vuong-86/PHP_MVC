<?php
if (isset($_SESSION['ss_admin'])) {
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
if ($user[0]['lv']==1) { 
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    if(isset($_POST['ok'])) {
        $data=$db->delete('product',array('id'=>$id));
        header('location: ?controller=trangchu');
    }
    if(isset($_POST['huy'])) {
        header('location: ?controller=trangchu');
    }
   
}}}
require 'view/V_delete.php';