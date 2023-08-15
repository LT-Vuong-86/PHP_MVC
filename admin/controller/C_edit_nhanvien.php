<?php
if (isset($_SESSION['ss_admin'])) {
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
if ($user[0]['lv']==1) {
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $user1=$db->get('admin_nhanvien', array('id'=>$id));
if(isset($_POST['btn_sua'])){
    $username=$_POST['username'];
   $password=$_POST['password'];
   $full_name=$_POST['full_name'];
   $lv=$_POST['lv'];
   $id1=$_POST['id'];
        $db->update('admin_nhanvien',
       array(
        'id'=>$id1,
        'username'=>$username,
        'password'=>$password,
        'full_name'=>$full_name,
        'lv'=>$lv
       ),
       array('id'=>$id) 
    );
    header('location: ?controller=trangchu');
    
};
};
};
}
else {
   header('location: ?controller=login');
}
require 'view/V_edit_nhanvien.php';