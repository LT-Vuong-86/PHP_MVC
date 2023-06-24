<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='giohangbt.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='main.js'></script>
</head>
<style>
    .hinhdaidien{
        width: 100px;
    }
    .xoa{
      float:right;
     
    }
    #tc{
        margin-left: 90%;
        margin-top: -35px;
    }
</style>
<body>
    <section id="vien">
        <section id="thanhtoan">
            <h1>THANH TOÁN</h1>
           <a href="?controller=trangchu"><h3 id="tc">trang chu</h3></a>
        </section>
        <section>
      

<table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
              <?php
        
    $tongtien=null;
    $thanhtien=null;
if(isset($_SESSION['cart'])){
    $stt=1;
    foreach ($_SESSION['cart'] as $key => $value) {
        $thanhtien = $value['price']*$value['sl'];
$tongtien+=$value['price']*$value['sl']

    ?>
                        <tbody id="datarow">
                            <tr>
                                <td><?php echo $stt?></td>
                                <td>
                                    <img src="<?php echo $value['img_link'] ?>" class="hinhdaidien">
                                </td>
                                <td><?php echo $value['name'] ?></td>
                                
                               <td ><a href="?controller=cart_xuli&method=tru&id=<?php echo $value['id']?>"><button>-</button></a>
                              
                                 <?php echo $value['sl'] ?>
                               <a href="?controller=cart_xuli&method=tang&id=<?php echo $value['id']?>"><button name="more"  >+</button></a>
                                </td>
                                
                                <td ><?php echo number_format($value['price']) ?></td>
                                <td ><?php echo number_format($thanhtien)?></td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_1" data-sp-ma="2" href="?controller=cart_xuli&method=xoa&id=<?php echo $value['id']?>" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                         
                        </tbody>
                        <?php  $stt= $stt+1;   }
                        
}?>
 <tr> <h3 class="xoa">tongtien:<?php echo $tongtien?> </h3> </tr>
                    </table>
                  
                    <span>
                   
                    <a href="?controller=cart_xuli&method=xoatat&id=<?php echo $value['id']?>" class="xoa btn btn-danger">xóa tất</a><br><br>
                    <a href="?controller=checkout" class="xoa btn btn-warning">thanhtoan</a>
                    </span>
                    
                    
</body>

</html>