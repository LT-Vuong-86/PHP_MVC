<?php
$id=$_GET['id'];
$product_2 = $db->get('product_2',array('id'=>$id));
$catalog = $db->get('catalog',array('id'=>$product_2[0]['catalog_id']));
require ('./view/V_chitiet.php');
?>