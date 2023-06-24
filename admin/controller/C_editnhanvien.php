<?php
if (isset($_GET['id'])) {
    $_SESSION['id']=$_GET['id'];
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['id']));
}
