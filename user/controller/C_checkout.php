<?php
 if (isset($_POST['check_out'])){ 
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
    $oder_id = 0;
    $date_oder = date("y/m/d");
    $oder = $db->get('oder', array());
     foreach ($oder as $key => $value) 
     { $oder_id += $value['id']; }
    
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $key => $value) 
    { $tongtien+=$value['sl']*$value['price'];
   $db->insert('oder_detail', array(
      'oder_id'=>$oder_id,
      'product_id'=>$value['id'],
      'qty'=>$value['sl'],
      'price'=>$value['price'],
      'amount'=>$tongtien
      
   ));
   
   }
    $db->insert('oder',
     array( 
        'id'=>$oder_id, 
     'full_name'=>$full_name,
      'address'=>$address,
       'email'=>$email,
        'amount'=>$tongtien,
    'phone'=>$phone, 
    'status'=>0,
    'Date_oder'=>$date_oder
    )); 
    unset($_SESSION['cart']);
    header('location: ?controller=hoadon');
}
require 'view/V_checkout.php';