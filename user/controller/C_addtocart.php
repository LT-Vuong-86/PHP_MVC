<?php
$id=$_GET['id'];
$product =$db->get('product', array('id'=>$id));
// $product =$db->get('product_2', array('id'=>$id));
if (isset($_SESSION['cart'])) {   
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['sl']+=1;
    
    } 
    else {
                $_SESSION['cart'][$id]['id'] = $product[0]['id'];
                $_SESSION['cart'][$id]['img_link'] = $product[0]['img_link'];
                $_SESSION['cart'][$id]['name'] = $product[0]['name'];
                $_SESSION['cart'][$id]['price'] = $product[0]['price'];
                $_SESSION['cart'][$id]['sl'] = 1;
    }
}else{
    //Ne cha ton tai SESSION['cart']
        $_SESSION['cart'][$id]['id'] = $product[0]['id'];
        $_SESSION['cart'][$id]['img_link'] = $product[0]['img_link'];
        $_SESSION['cart'][$id]['name'] = $product[0]['name'];
        $_SESSION['cart'][$id]['price'] = $product[0]['price'];
        $_SESSION['cart'][$id]['sl'] = 1;
    }
    header('location: ?controller=trangchu');

