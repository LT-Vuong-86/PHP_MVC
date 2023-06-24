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
     include 'controller/C_delete.php';
     break;
   // case 'V_delete':
   //    include 'view/V_delete_nhanvien.php';
   //    break;
   case 'add':
      include 'controller/C_add_nhanvien.php';
      break;
   case 'edit':
      include 'controller/C_edit_nhanvien.php';
      break;
   // case 'V_edit':
   //     include 'controller/C_edit_nhanvien.php';
   //     break;   
      default:
}
?>
