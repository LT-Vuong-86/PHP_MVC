<?php
session_start();
include 'model/m_database.php';
$db= new database();
if (isset($_GET['controller'])) {
   $controller = $_GET['controller'];
}else{
$controller = 'login';}
   switch ($controller) {
      case 'trangchu':
      include 'controller/C_trangchu.php';
      break;
    case 'login':
       include 'controller/C_login.php';
        break;
   case 'out':
     unset($_SESSION['ss_admin']);
     include 'controller/C_login.php';
     break;
   case 'ds_nhanvien':
      include 'controller/C_dsnhanvien.php';
         break;
   case 'delete':
     include 'controller/C_delete_nv.php';
     break;
   case 'add_nv':
      include 'controller/C_add_nhanvien.php';
      break;
   case 'edit':
      include 'controller/C_edit_nhanvien.php';
      break;
   case 'add_sp':
      include 'controller/C_add_sanpham.php';
      break;
   case 'edit_sp':
      include 'controller/C_edit_sp.php';
      break;
   case 'delete_sp':
      include 'controller/C_delete_sp.php';
      break;  
   case 'xuli_oder':
      include 'controller/C_xuli_oder.php';
      break;
   case 'chitiet_oder':
      include 'controller/C_chitiet_oder.php';
      break;    
         
      default:
}
?>
