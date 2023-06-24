<?php
session_start();
include 'model/m_database.php';
$db= new database();
if (isset($_GET['controller'])) {
   $controller = $_GET['controller'];

}else{
$controller = 'trangchu';}
   switch ($controller) {
      case 'trangchu':
      include 'controller/C_trangchu.php';
      break;
    case 'chitiet':
       include 'controller/C_chitiet.php';
        break;
   case 'cart':
         include 'controller/C_cart.php';
          break;
    
    case 'add_cart':
      include 'controller/C_addtocart.php';
       break;
    case 'checkout':
    include 'controller/C_checkout.php';
    case 'cart_xuli':
        include 'controller/C_cart_xuli.php';
    break;   
       default:
   
}
?>
