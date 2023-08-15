<?php
if (isset($_SESSION['ss_admin'])) {
    $user=$db->get('admin_nhanvien', array('id'=>$_SESSION['ss_admin']));
    if ($user[0]['lv']==1) {
        if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $user1=$db->get('oder');
            if (isset($_GET['method'])) {
                $method=$_GET['method'];
                switch($method){
                    case '1':
                        $db->update('oder',array('status'=>0),array('id'=>$id));
                        break;
                    case '0':
                        $db->update('oder',array('status'=>1),array('id'=>$id));
                        break;
                    case 'sua':
                       
                        require 'view/V_edit_oder.php';
                        exit;
                        break;
                        
                    case 'xoa':
                        $db->delete('oder',array('id'=>$id));
                        $db->delete('oder_detail',array('oder_id'=>$id));
                        header('location: ?controller=trangchu');
                        break;
                    default:
                    break;
                }
            }
        }
    }
}
require 'controller/C_trangchu.php';