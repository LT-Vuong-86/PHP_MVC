<?php

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    // $keyword=trim($keyword, '#');
    $product_2 = $db->get_like('product_2','name',$keyword);
    $product = $db->get_like('product','name',$keyword);
}else{
   $product = $db->get('product',array());
    $product_2 = $db->get('product_2',array());
}


include 'view/V_trangchu.php';
?>