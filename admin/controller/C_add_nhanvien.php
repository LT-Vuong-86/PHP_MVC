<?php
if (isset($_SESSION['ss_admin'])) {
   $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
if ($user[0]['lv']==1) {
if (isset($_POST['btn_add'])) {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $full_name=$_POST['full_name'];

   $loi= array();
   if($username == '') {
      $loi['username']='tai khoan khong dc de trong';
  }
  if($password == '') {
      $loi['password']='mk khong dc de trong';
  }
  if($full_name == '') {
   $loi['password']='full_name khong dc de trong';
}

  if (!$loi) {
   $db->insert('admin_nhanvien',array(
      'username'=>$username,
      'password'=>$password,
      'full_name'=>$full_name,
      'lv'=>2
      ));
      header('location: ?controller=trangchu');
      }
  }

}
}
else {
   header('location: ?controller=login');
}
require 'view/v_add_nhanvien.php';