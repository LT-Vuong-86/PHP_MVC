<?php
if (isset($_SESSION['ss_admin'])) {
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
if ($user[0]['lv']==1) {
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $user1=$db->get('product', array('id'=>$id));
if(isset($_POST['btn_sua'])){
    $catalog_id=$_POST['catalog_id'];
    $uploadedFile = $_FILES['img_link'];
    $img_link=$db->uploadfile($uploadedFile);//?$_POST['img_link']:$user1[0]['img_link'];
   $name=$_POST['name'];
   $price=$_POST['price'];
   $amount=$_POST['amount'];
   $content=$_POST['content'];
        $db->update('product',
       array(
        'catalog_id'=>$catalog_id,
        'img_link'=>$img_link,
        'name'=>$name,
        'price'=>$price,
        'amount'=>$amount,
        'content'=>$content
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
require 'view/V_edit_sp.php';