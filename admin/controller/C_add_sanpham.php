<?php
if (isset($_SESSION['ss_admin'])) {
   $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
if ($user[0]['lv']==1) {
if (isset($_POST['btn_add'])) {

    $uploadedFile = $_FILES['img_link'];
    $img_link=$db->uploadfile($uploadedFile);
   $name=$_POST['name'];
//    $img_link=$_FILES['img_link'];
   $price=$_POST['price'];
   $amount=$_POST['amount'];
   $content=$_POST['content'];
$catalog_id=$_POST['catalog_id'];
   $loi= array();
if($name == '') {
      $loi['trong']='khong dc de trong';
}
  if($catalog_id == '') {
    $loi['trong']='khong dc de trong';
}
  if($img_link == '') {
      $loi['trong']='khong dc de trong';
  }
  if($price == '') {
   $loi['trong']=' khong dc de trong';
  }
  if($amount == '') {
    $loi['trong']='khong dc de trong';
   }
   if($content == '') {
    $loi['trong']=' khong dc de trong';
   }

  if (!$loi) {
   $db->insert('product',array(
    'catalog_id' => $catalog_id,
      'name'=>$name,
      'img_link'=>$img_link,
      'price'=>$price,
      'amount'=>$amount,
      'content'=>$content
      ));
      header('location: ?controller=trangchu');
      }
  }

}
}
else {
   header('location: ?controller=login');
}
require 'view/V_add_sanpham.php';